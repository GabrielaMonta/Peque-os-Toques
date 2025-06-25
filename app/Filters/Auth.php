<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface 
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Iniciamos la sesión
        $session = session();

        // Si el usuario no está logueado
        if (!session()->get('logged_in')) {
            // Redirige a la página de inicio de sesión
            return redirect()->to('/')
                             ->with('msg', 'Debes iniciar sesión primero')
                             ->with('showLoginModal', true);
        }

        // Verificar si el usuario está dado de baja
        $usuarioId = $session->get('id');
        $usuarioModel = new \App\Models\Usuarios_model();
        $usuario = $usuarioModel->find($usuarioId);

        if (!$usuario || $usuario['baja'] === 'SI') {
            
            return redirect()->to('/')
                            ->with('msg', 'Tu cuenta fue dada de baja. Contactá con un administrador.')
                            ->with('showLoginModal', true);
            $session->destroy(); // Cerramos sesión
        }

        //Si hay un perfil requerido en los argumentos
        if ($arguments && isset($arguments[0])) {
            $perfilRequerido = $arguments[0];
            $perfilUsuario = $session->get('perfil_id');

            if ($perfilUsuario != $perfilRequerido) {
                return redirect()->to('/')
                                ->with('msg', 'No tenés permiso para entrar a esta sección');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No hacemos nada aquí por ahora
    }
}
