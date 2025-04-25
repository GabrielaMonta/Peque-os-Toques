<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Pequeños Toques';
        echo view('front/head',$data);
        echo view('front/navbar',$data);
        echo view('front/plantilla',$data);
        echo view('front/footer',$data);
    }

    /*Nosotros*/
    public function sobreNosotros()
    {
        $data['titulo'] = 'Sobre Nosotros';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/sobreNosotros', $data);
        echo view('front/footer', $data);
    }
    public function comercializacion()
    {
        $data['titulo'] = 'Comercializacion';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/comercializacion', $data);
        echo view('front/footer', $data);
    }
    public function contacto()
    {
    $data['titulo'] = 'Contacto';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/contacto', $data);
        echo view('front/footer', $data);
    }
    public function preguntasFrecuentes()
    {
        $data['titulo'] = 'Preguntas Frecuentes';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/preguntasFrecuentes', $data);
        echo view('front/footer', $data);
    }


    /*Novedades*/
    public function novedades()
    {
        $data['titulo'] = 'Novedades';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/novedades', $data);
        echo view('front/footer', $data);
    }


    /*Catalogo*/
    public function indumentaria()
    {
        $data['titulo'] = 'Indumentaria';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/indumentaria',$data);
        echo view('front/footer', $data);
    }
    public function calzado()
    {
        $data['titulo'] = 'Calzado';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/calzado', $data);
        echo view('front/footer', $data);
    }
    public function blanqueria()
    {
        $data['titulo'] = 'Blanqueria';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/blanqueria', $data);
        echo view('front/footer', $data);
    }
    public function marroquineria()
    {
        $data['titulo'] = 'Marroquineria';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/marroquineria', $data);
        echo view('front/footer', $data);
    }
    public function verTodo()
    {
        $data['titulo'] = 'Ver Todo';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data);
        echo view('front/footer', $data);
    }
    

    /*Auth*/
    public function inicioSesion()
    {
        $data['titulo'] = 'Inicio Sesion';
        echo view('front/auth/login', $data);
        
    }
    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/auth/registro', $data);
    }
}
