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
                'uid'   => $request->getPost('options[uid]'),
            ]
        ));

    return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    public function eliminar()
    {
        $rowid = $this->request->getPost('rowid');
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->back();
    }

}