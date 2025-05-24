<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Usuarios_model;

class LoginController extends BaseController
{
    public function index()
    {
        helper(['form', 'url']); // Punto y coma faltaba aquí
    }

    public function auth()
    {
        $session = session(); // iniciamos el objeto session
        $model = new Usuarios_model(); // instanciamos el modelo

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            $passHash = $data['pass'];
            $baja = $data['baja'];

            if ($baja === 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/')
                                 ->with('showLoginModal', true);
            }

            if (password_verify($password, $passHash)) {
                $ses_data = [
                    'id_usuario' => $data['id'],
                    'nombre'     => $data['nombre'],
                    'apellido'   => $data['apellido'],
                    'email'      => $data['email'],
                    'usuario'    => $data['usuario'],
                    'perfil_id'  => $data['perfil_id'],
                    'logged_in'  => true,
                ];

                $session->set($ses_data);

                // Mensaje de bienvenida opcional
                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/'); // redirige al panel
            } else {
                // Contraseña incorrecta
                return redirect()->to('/')
                                 ->with('msg', 'Contraseña incorrecta')
                                 ->with('showLoginModal', true);
            }
        } else {
            // Usuario no encontrado
            return redirect()->to('/')
                             ->with('msg', 'Email no registrado o incorrecto')
                             ->with('showLoginModal', true);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
