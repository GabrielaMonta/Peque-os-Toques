<?php
namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class UsuarioController extends Controller {
   public function registrar()
    {
        helper(['form']);

        // Reglas de validación
        $rules = [
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[6]',
            'pass_confirm' => 'matches[pass]'
        ];

        
         if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('showRegistroModal', true) // indica abrir modal
                ->with('validation', $this->validator);
        }

        // Si pasa la validación, guardar usuario
       $model = new Usuarios_model();

        $model->save([
            'email'  => $this->request->getPost('email'),
            'pass'   => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('/')
            ->with('showLoginModal', true)
            ->with('success', 'Usuario registrado correctamente.');
            ;  // indica abrir modal login
    }
}

