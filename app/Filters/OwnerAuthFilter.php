<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class OwnerAuthFilter implements FilterInterface
{
    /**
     * Do whatever processing you want here.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        $loggedInUserId = $session->get('id'); // ID del usuario logueado en sesión

        // Obtener el ID del usuario de la URL
        // La ruta será 'cliente-actualizar-perfil/(:num)', por lo que el ID es el primer segmento dinámico.
        $requestedUserId = $request->uri->getSegment(2); // El ID del usuario en la URL

        // Si no hay un ID de sesión (no logueado) o el ID en la URL no coincide con el de la sesión
        // y el usuario no es un administrador (auth:1), redirigir.
        // Aquí puedes ajustar la lógica según tu sistema de roles.
        // Asumiendo que el filtro 'auth:2' ya maneja que el usuario esté logueado.
        // Este filtro se ejecutará *después* del filtro 'auth'.

        // Si el usuario es un cliente (rol 2, ya filtrado por 'auth:2')
        // y el ID en la URL no coincide con su propio ID de sesión,
        // no tiene permiso para modificar ese perfil.
        if ($session->get('perfil_id') == 2 && $loggedInUserId != $requestedUserId) {
            return redirect()->to('/cuenta')->with('mensaje', 'No tenés permiso para modificar este perfil.');
        }

        // Si el usuario es un administrador (rol 1), se asume que puede modificar cualquier perfil.
        // Esto lo puedes manejar con el filtro 'auth:1' o aquí mismo, dependiendo de tu diseño.
        // Si tienes 'auth:1' en la ruta del admin, ese filtro ya se encargará de que solo admins accedan.
        // Para este filtro OwnerAuthFilter, nos enfocamos en el cliente (auth:2).
    }

    /**
     * Allows After filters to transform the response object
     * in some way, and holds the class anywhere in the system.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // No se necesita nada aquí para este caso.
    }
}