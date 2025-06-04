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
    //mostrar los productos en lista
    public function index(){
        $productoModel = new Producto_model();
        //realizo la consulta para mostrar todos los productos
        $data['producto'] = $productoModel->getProductoAll(); //funcion en el modelo

        $dato['titulo'] = 'Crud_productos';
        echo view('front/head', $dato);
        echo view('front/admin/navbar_admin');
        echo view('back/productos/producto_nuevo', $data);
        echo view('front/footer');
    }

    public function crearProducto(){
        $categoriasModel = new Categoria_model();
        $data['categorias'] = $categoriasModel->getCategorias();//trear las categorias de la db

        $productoModel = new Producto_model();
        $data['producto'] = $productoModel->getProductoAll();

        $dato['titulo'] = 'Alta producto';
        echo view('front/head', $dato);
        echo view('front/admin/navbar_admin');
        echo view('back/productos/alta_producto', $data);
    }

    public function store(){
        //construimos las reglas de validacion
        $input = $this->validate([
            'nombre_prod'=>'required|min_length[3]',
            'categoria'=>'is_not_unique[categoria.id]',
            'precio'=>'required|numeric',
            'precio_vta'=>'required|numeric',
            'stock'=>'required',
            'stock_min'=>'required',
            'imagen'=>'uploaded[imagen]',
            'talle'=>'required|min_length[1]|max_length[10]',
            'genero'=>'required|in_list[hombre,mujer,niños]',
            'tipo'=>'required|min_length[3]|max_length[50]',
            
        ]);

        $productoModel = new Producto_model();//se instancia el modelo

        if($input){
            $categoria_model = new Categoria_model();
            $data['categorias'] = $categoria_model->getCategorias();
            $data['validation'] = $this->validator;

            $dato['titulo'] = 'Alta';
            echo view('front/head', $dato);
            echo view('front/navbar');
            echo view('back/productos/alta_producto', $data);
        }

        $img=$this->request->getFile('imagen');
        //este codigo genera un nombre aleatorio para el archivo
        $nombre_aleatorio = $img->getRandomName();
        //mueve el archivo de imagen a una ubicacion especifica en el servidor metodo mode() en la carpera assets/uploads
        $img->move(ROOTPATH.'assets/uploads',$nombre_aleatorio);

        $data = [
            'nombre_prod'=>$this->request->getVar('nombre_prod'),
            //Aqui se obtiene elnombre del archivo de imagen (sin la ruta) utilizando el metodo getName() del objeto &img
            'imagen'=>$img->getName(),
            'categoria_id'=>$this->request->getVar('categoria'),
            'precio'=>$this->request->getVar('precio'),
            'precio_vta'=>$this->request->getVar('precio_vta'),
            'stock'=>$this->request->getVar('stock'),
            'stock_min'=>$this->request->getVar('stock_min'),
            'eliminado'=>'NO'
        ];

        $producto = new Producto_model();
        $producto->insert($data);
        session()->setFlashdata('succes', 'Producto creado exitosamente');
        return $this->response->redirect(site_url('crud-productos'));
    }
}