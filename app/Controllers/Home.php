<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    { 
        $session = session();
        
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
        $data = [
            'titulo' => 'Producto',
            'cart'   => $this->cart,
        ];
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/producto-view', $data);
        echo view('front/footer', $data);
    }

    
     public function carrito()
    {
        $data = [
            'titulo' => 'Carrito',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/Carrito/carrito', $data);
        echo view('front/footer', $data);
    }
    
    
}
