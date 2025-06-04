<?php

namespace App\Controllers;

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
        $data['titulo'] = 'CRUD Usuarios';
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
}