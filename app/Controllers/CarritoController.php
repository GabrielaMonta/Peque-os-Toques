<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class CarritoController extends BaseController
{
    public function __construct(){
        helper(['form', 'url', 'cart']);
        $cart = \Config\Services::cart();
        $session = session();
    }
    
    public function add(){
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();

        $cart -> insert(array(
            'id' => $request->getPost('id'),
            'qty' => $request->getPost('qty'),
            'name' => $request->getPost('nombre_prod'),
            'price' => $request->getPost('precio_vta'),
            'options' => [
                'color' => $request->getPost('options[color]'),
                'img'   => $request->getPost('options[img]'),
                'nota'  => $request->getPost('options[nota]'),
            ]
        ));

    return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    public function actualiza_carrito(){      
        $cart = \Config\Services::Cart();
        $request = \Config\Services::request();

        $cart -> insert(array(
            'id' => $request->getPost('id'),
            'qty' => 1,
            'name' => $request->getPost('nombre_prod'),
            'price' => $request->getPost('precio_vta'),
            'options' => [
                'color' => $request->getPost('options[color]'),
                'img'   => $request->getPost('options[img]'),
                'nota'  => $request->getPost('options[nota]'),
            ]
        ));

    return redirect()->back()->withInput();
    }

    public function eliminar()
    {
        $rowid = $this->request->getPost('rowid');
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->back();
    }

    public function verCarrito()
    {
        $cart = \Config\Services::cart();
        $data = [
            'titulo' => 'Carrito',
            'cart'   => $this->cart,
        ] ;
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('back/carrito/verCarrito', $data);
        echo view('front/footer', $data);
    }

    public function devolver_carrito(){
        $cart = \Config\Services::cart();
        return $cart->contents();
    }

    public function eliminar_item($rowid){
        $cart = \Config\Services::Cart();
        $cart->remove($rowid);
       
    }

}