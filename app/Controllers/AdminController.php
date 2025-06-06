<?php

namespace App\Controllers;
use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class AdminController extends BaseController
{
    /*Panel admin*/
    public function panelAdmin()
    {
        $data['titulo'] = 'Aministrador';
        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/plantilla_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudUsuarios()
    {
        $model = new \App\Models\Usuarios_model();
        $usuarios = $model->where('baja', 'NO')->findAll();

        $data['titulo'] = 'CRUD Usuarios';
        $data['usuarios'] = $usuarios;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_usuarios', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudProductos()
    {
        $model = new \App\Models\Producto_model();
        $producto = $model->where('eliminado', 'NO')->findAll();

        $data['titulo'] = 'CRUD Productos';
        $dato['productos'] = $producto;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_productos', $dato);
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
    public function editarUsuario($id)
    {
        $model = new \App\Models\Usuarios_model();
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