<?php
namespace App\Controllers;
Use App\Models\Producto_model;
Use App\Models\Usuarios_model;
Use App\Models\Categoria_model;
Use CodeIgniter\Controller;

class ProductoController extends Controller{
    public function __construct()
    {
        helper(['url', 'form']);
        $this->session = session();
    }

    public function crearProducto(){
        $categoriasModel = new Categoria_model();
        $data['categorias'] = $categoriasModel->getCategorias();//trear las categorias de la db

        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->getProductoAll();
        $data['cart']   = $this->cart;
        $dato['titulo'] = 'Alta producto';
        echo view('front/head', $dato);
        echo view('front/admin/navbar_admin');
        echo view('back/productos/alta_producto', $data);
    }

    public function store(){
        //construimos las reglas de validacion
        $input = $this->validate([
            'nombre_prod'=>'required|min_length[3]',
            'descripcion' => 'permit_empty|max_length[2000]',
            'categoria'=>'is_not_unique[categoria.id]',
            'precio'=>'required|numeric',
            'precio_vta'=>'required|numeric',
            'stock'=>'required',
            'stock_min'=>'required',
            'imagen'=>'uploaded[imagen]',
            'color' => 'required|is_array',
            'genero'=>'required|in_list[hombre,mujer,niños]',
            'tipo'=>'required|min_length[3]|max_length[50]',
            
        ]);
        if(!$input){
            // Mostrar el formulario con errores
            $categoria_model = new Categoria_model();
            $data['categorias'] = $categoria_model->getCategorias();
            $data['validation'] = $this->validator;
            $data['cart']   = $this->cart;  
            $dato['titulo'] = 'Alta';
            echo view('front/head', $dato);
            echo view('front/admin/navbar_admin');
            echo view('back/productos/alta_producto', $data);
            return; 
        }
        
        // Si pasó la validación, procesar los datos
        $img=$this->request->getFile('imagen');
        $nombre_aleatorio = $img->getRandomName(); //este codigo genera un nombre aleatorio para el archivo
        $img->move(ROOTPATH.'assets/uploads',$nombre_aleatorio);//mueve el archivo de imagen a una ubicacion especifica en el servidor metodo mode() en la carpera assets/uploads

        $colores_array = $this->request->getVar('color') ?? [];
        $colores_array = array_map('strtolower', array_map('trim', $colores_array));
        $permitidos = ['amarillo','azul','beige','blanco','bordo','celeste','gris','marron','negro','naranja','rosa','rojo','violeta'];
        $colores_array = array_filter($colores_array, fn($color) => in_array($color, $permitidos));
        $colores_string = implode(',', $colores_array);

        $data = [
            'nombre_prod'=>$this->request->getVar('nombre_prod'),
            'descripcion' => $this->request->getVar('descripcion_prod'), 
            'imagen'=>$img->getName(),
            'categoria_id'=>$this->request->getVar('categoria'),
            'precio'=>$this->request->getVar('precio'),
            'precio_vta'=>$this->request->getVar('precio_vta'),
            'stock'=>$this->request->getVar('stock'),
            'stock_min'=>$this->request->getVar('stock_min'),
            'tipo' => $this->request->getVar('tipo'),
            'genero' => $this->request->getVar('genero'),
            'color' => $colores_string,
            'eliminado'=>'NO'
        ];

        $producto = new Producto_model();
        $producto->insert($data);
        session()->setFlashdata('success', 'Producto creado exitosamente');
        return $this->response->redirect(site_url('crud-productos'));
    }

    public function editarProducto($id)
    {
        $model = new Producto_model();
        $producto = $model->find($id);

        $categoria_model = new Categoria_model();
        $data['categorias'] = $categoria_model->getCategorias();
        $data['producto'] = $producto;
        $data['titulo'] = 'Editar Producto';
        $data['cart']   = $this->cart;
        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('back/productos/editar_producto', $data); // tu nueva vista
        echo view('front/admin/footer_admin', $data);
    }

    public function actualizarProducto($id)
    {
        $model = new Producto_model();

        $colores_array = $this->request->getVar('color') ?? [];
        $colores_array = array_map('strtolower', array_map('trim', $colores_array));
        $permitidos = ['amarillo','azul','beige','blanco','bordo','celeste','gris','marron','negro','naranja','rosa','rojo','violeta'];
        $colores_array = array_filter($colores_array, fn($color) => in_array($color, $permitidos));
        $colores_string = implode(',', $colores_array);

        $data = [
            'nombre_prod' => $this->request->getPost('nombre_prod'),
            'descripcion' => $this->request->getPost('descripcion_prod'),
            'categoria_id' => $this->request->getPost('categoria'),
            'precio' => $this->request->getPost('precio'),
            'precio_vta' => $this->request->getPost('precio_vta'),
            'stock' => $this->request->getPost('stock'),
            'stock_min' => $this->request->getPost('stock_min'),
            'tipo' => $this->request->getPost('tipo'),
            'genero' => $this->request->getPost('genero'),
            'color' => $colores_string,
        ];

        // Si subió nueva imagen
        $img = $this->request->getFile('imagen');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $nombre_aleatorio = $img->getRandomName();
            $img->move(ROOTPATH.'assets/uploads', $nombre_aleatorio);
            $data['imagen'] = $img->getName();
        }

        $model->update($id, $data);

        return redirect()->to('/crud-productos')->with('success', 'Producto actualizado correctamente');
    }

    public function eliminarProducto($id)
    {
        $model = new Producto_model();
        $model->update($id, ['eliminado' => 'SI']);

        return redirect()->to('/crud-productos')->with('success', 'Producto dado de baja.');
    }
}