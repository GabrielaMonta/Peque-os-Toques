<?php

namespace App\Controllers;
use App\Models\Usuarios_model;
use App\Models\Categoria_model;
use App\Models\Producto_model;
use App\Models\Consulta_model;
use CodeIgniter\Controller;


class AdminController extends BaseController
{
    /*Panel admin*/
    public function panelAdmin()
    {
         // Últimos usuarios registrados
        $usuarioModel = new Usuarios_model();
        $ultimosUsuarios = $usuarioModel
            ->where('baja', 'NO')
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Productos con stock bajo
        $productoModel = new Producto_model();
        $productosBajoStock = $productoModel
            ->where('eliminado', 'NO')
            ->where('stock <=', 1)
            ->orderBy('stock', 'ASC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Últimas consultas
        $consultaModel = new Consulta_model();
        $ultimasConsultas = $consultaModel
            ->orderBy('id_consulta', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        $pendientes = $consultaModel
        ->where('respuesta', 'NO')
        ->countAllResults();

        // Enviar los datos a la vista
        $data = [
            'titulo' => 'Panel de Administración',
            'ultimosUsuarios' => $ultimosUsuarios,
            'productosBajoStock' => $productosBajoStock,
            'ultimasConsultas' => $ultimasConsultas,
            'consultasPendientes' => $pendientes,
        ];

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/plantilla_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudUsuarios()
    {
        $model = new Usuarios_model();

        $tipo = $this->request->getGet('tipo'); // perfil_id
        $baja = $this->request->getGet('baja');
        $orden = $this->request->getGet('orden');
        $buscar = $this->request->getGet('buscar');

        $usuariosQuery = $model->filtrarUsuarios($tipo, $baja, $orden, $buscar);

        $data['titulo'] = 'CRUD Usuarios';
        $data['usuarios'] = $usuariosQuery->paginate(10, 'usuarios');
        $data['pager'] = $model->pager;

        // Para usar en los selects (opcional si tenés tabla perfiles)
        $data['tipoSeleccionado'] = $tipo;
        $data['bajaSeleccionado'] = $baja;
        $data['ordenSeleccionado'] = $orden;
        $data['buscar'] = $buscar;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_usuarios', $data);
        echo view('front/admin/footer_admin', $data);
    }


    public function crudProductos()
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();

        // Obtener filtros desde la URL
        $categoria = $this->request->getGet('categoria');
        $orden = $this->request->getGet('orden');
        $buscar = $this->request->getGet('buscar');

        // Aplicar filtro
        $productosFiltrados = $productoModel->filtrarProductos($categoria, $orden, $buscar);

        // Paginación (10 por página)
        $data['productos'] = $productosFiltrados->paginate(15, 'productos');
        $data['pager'] = $productoModel->pager;

        // Categorías para el filtro
        $data['categorias'] = $categoriaModel->getCategorias();
        $data['titulo'] = 'CRUD Productos';

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_productos', $data);
        echo view('front/admin/footer_admin', $data);
    }


    public function ventas()
    {
        $data['titulo'] = 'Ventas';
        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/ventas', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function setup()
    {  
        $data['titulo'] = 'Admin';
        echo view('front/head', $data);
        echo view('front/admin/setup_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function consultas()
    {
        $model = new Consulta_model();
        $consultas = $model->orderBy('id_consulta', 'DESC')->findAll(); // Podés paginar más adelante

        $data['titulo'] = 'Consultas';
        $data['consultas'] = $consultas;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/consultas', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function editarUsuario($id)
    {
        $model = new Usuarios_model();
        $usuario = $model->find($id); 

        if (!$usuario) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuario no encontrado');
        }

        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $usuario;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/editar_usuario', $data); 
        echo view('front/admin/footer_admin', $data);
    }
    
    
}