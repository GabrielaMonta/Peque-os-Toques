<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    { 
        $session = session();
        $cart = \Config\Services::Cart();
        $data = [
            'titulo' => 'Pequeños Toques',
            'showRegistroModal' => $session->get('showRegistroModal'),
            'showLoginModal'    => $session->get('showLoginModal'),
            'validation'        => $session->get('validation'),
            'success'           => $session->get('success'),
            'msg'               => $session->getFlashdata('msg'),
            'cart'              => $this->cart,
        ];

     
        echo view('front/head',$data);
        echo view('front/navbar',$data);
        echo view('front/plantilla',$data);
        echo view('front/footer',$data);
    }

    /*Nosotros*/
    public function sobreNosotros()
    {
        $cart = \Config\Services::Cart();
        $data =[
            'titulo' => 'Sobre Nosotros',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/sobreNosotros', $data);
        echo view('front/footer', $data);
    }
    public function comercializacion()
    {
        $cart = \Config\Services::Cart();
        $data = [
            'titulo' => 'Comercialización',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/comercializacion', $data);
        echo view('front/footer', $data);
    }
    public function contacto()
    {
        $cart = \Config\Services::Cart();
    $data = [
            'titulo' => 'Contacto',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/contacto', $data);
        echo view('front/footer', $data);
    }
    public function preguntasFrecuentes()
    {
        $cart = \Config\Services::Cart();
        $data = [
            'titulo' => 'Preguntas frecuentes',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/nosotros/preguntasFrecuentes', $data);
        echo view('front/footer', $data);
    }


    /*Novedades*/
    public function novedades()
    {
        $cart = \Config\Services::Cart();
        $data = [
            'titulo' => 'Novedades',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/novedades', $data);
        echo view('front/footer', $data);
    }


    public function producto(){
        $cart = \Config\Services::Cart();
        $data = [
            'titulo' => 'Producto',
            'cart'   => $this->cart,
        ];
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/producto-view', $data);
        echo view('front/footer', $data);
    }

    
     
    
    
}
