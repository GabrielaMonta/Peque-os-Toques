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
            'pass'   => password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT),
            'perfil_id' => 2,
        ]);

        return redirect()->to('/')
            ->with('showLoginModal', true)
            ->with('success', 'Usuario registrado correctamente.');
            ;  // indica abrir modal login
    }
    
    public function actualizarUsuario($id)
    {
        $model = new Usuarios_model();

        $data = [];

        $nombre = $this->request->getPost('nombre');
        if ($nombre !== null && $nombre !== '') {
            $data['nombre'] = $nombre;
        }

        $apellido = $this->request->getPost('apellido');
        if ($apellido !== null && $apellido !== '') {
            $data['apellido'] = $apellido;
        }

        $dni = $this->request->getPost('dni');
        if ($dni !== null && $dni !== '') {
            $data['dni'] = $dni;
        }

        $telefono = $this->request->getPost('telefono');
        if ($telefono !== null && $telefono !== '') {
            $data['telefono'] = $telefono;
        }

        $fecha_nacimiento = $this->request->getPost('fecha_nacimiento');
        if ($fecha_nacimiento !== null && $fecha_nacimiento !== '') {
            $data['fecha_nacimiento'] = $fecha_nacimiento;
        }

        $usuario = $this->request->getPost('usuario');
        if ($usuario !== null && $usuario !== '') {
            $data['usuario'] = $usuario;
        }

        $email = $this->request->getPost('email');
        if ($email !== null && $email !== '') {
            $data['email'] = $email;
        }

        $perfil_id = $this->request->getPost('perfil_id');
        if ($perfil_id !== null && $perfil_id !== '') {
            $data['perfil_id'] = $perfil_id;
        }

        if (!empty($data)) {
            $model->update($id, $data);
            return redirect()->to('/crud-usuarios')->with('mensaje', 'Usuario actualizado correctamente');
        } else {
            return redirect()->to('/crud-usuarios')->with('mensaje', 'No se modificó ningún dato');
        }
    }

    public function borrar($id)
    {
    $model = new Usuarios_model();
    $model->update($id, ['baja' => 'SI']);

    return redirect()->to('/crud-usuarios')->with('success', 'Usuario dado de baja.');
    }


    


}

