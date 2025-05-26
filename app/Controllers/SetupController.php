<?php

namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class SetupController extends Controller
{
    public function index()
{
    $token = $this->request->getGet('token');
    $setupKey = getenv('SETUP_KEY');


    if ($token !== $setupKey) {
        echo "Token inválido";
        die();
    }

    return redirect()->to('setup-admin');
}


    public function create()
    {
    $token = $this->request->getGet('token');
    $setupKey = getenv('SETUP_KEY');

    if ($token !== $setupKey) {
        return redirect()->to('/')->with('error', 'Acceso no autorizado');
    }

    if (!$this->request->is('post')) {
        return redirect()->to('/setup?token=' . $token)->with('error', 'Método inválido');
    }

    $postData = $this->request->getPost();

    // Validar campos obligatorios
    $required = ['nombre', 'apellido', 'email', 'usuario', 'pass'];
    foreach ($required as $field) {
        if (empty($postData[$field])) {
            return redirect()->back()->withInput()->with('error', "El campo $field es obligatorio");
        }
    }

    $usuariosModel = new Usuarios_model();

    $adminExists = $usuariosModel->where('perfil_id', 1)->first();
    if ($adminExists) {
        return redirect()->to('/')->with('message', 'Ya hay un administrador creado');
    }

    $data = [
        'nombre'    => $postData['nombre'],
        'apellido'  => $postData['apellido'],
        'email'     => $postData['email'],
        'usuario'   => $postData['usuario'],
        'pass'      => password_hash($postData['pass'], PASSWORD_DEFAULT),
        'perfil_id' => 1,
        'baja'      => 0
    ];

    $usuariosModel->insert($data);

    return redirect()->to('/')
            ->with('showLoginModal', true)
            ->with('success', 'Usuario registrado correctamente.');
            ;  // indica abrir modal login
}

}
