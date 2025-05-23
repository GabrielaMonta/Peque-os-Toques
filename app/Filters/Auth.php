<?php
namespace App/Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\FilterInterface;

class Auth implements FilterInterface 
{

    public function before (RequestInterface $request, $arguments = null){

    //si el usuario no está logueado
    if(!session() ->get('logged_in')){
        //entonces redirecciona a la pagina de login page
        return redirect() ->to('/login');

    }
}

public function after (RequestInterface $request, ResponseInterface $response, $arguments = null){

}
}