<?php
namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function formValidation()
    {
        $rules = [
            'email'        => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass'         => 'required|min_length[3]|max_length[10]',
            'pass_confirm' => 'required|matches[pass]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $formModel = new Usuarios_model();

        $formModel->save([
            'email' => $this->request->getVar('email'),
            'pass'  => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
        ]);

        session()->setFlashdata('success', 'Usuario registrado con éxito.');
        return redirect()->to('/');
    }
}

