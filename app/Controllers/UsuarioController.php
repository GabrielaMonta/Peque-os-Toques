<?php
namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class UsuarioController extends Controller {
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

        if ($this->validate($rules)) {
            $formModel = new Usuarios_model();
            $data =[
                'email' => $this->request->getVar('email'),
                'pass'  => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
            ];
            // Respuesta JSON sin errores
            if ($formModel->save($data)) {
                return $this->response->setJSON([
                    'status' => true,
                    'message' => 'Usuario registrado con éxito. Ahora puedes iniciar sesión.'
                ]);
            } else {
            // Respuesta JSON con errores
                log_message('error', 'Error al guardar: ' . json_encode($formModel->errors()));
                return $this->response->setJSON([
                'status' => false,
                'errors' => $formModel->errors()
            ]);}
        }else{
            return $this->response->setJSON([
                'status' => false,
                'errors' => $this->validator->getErrors()
            ]);
        }
    }
}

