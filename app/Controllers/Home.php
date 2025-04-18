<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'principal';
        echo view('front/head',$data);
        echo view('front/navbar',$data);
        echo view('front/plantilla',$data);
        echo view('front/footer',$data);
    }

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

    public function novedades()
    {
        $data['titulo'] = 'Novedades';
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/novedades', $data);
        echo view('front/footer', $data);
    }
    
    
}
