<?php
namespace App\Controllers;
use CodeIgniter\Controller;
Use App\Models\Producto_model;
Use App\Models\Usuarios_model;

class VentasController extends Controller{
    public function registrar_venta(){
        $session = $session();
        require(APPPATH . 'Controllers/CarritoController.php');
        $cartController = new CarritoController();
        $carrito_contents = $cartController->devolver_carrito();

        $productoModel = new Producto_model();
        $ventasModel = new Ventas_cabecera_model():
        $detalleModel = new Ventas_detalle_model();

        $productos_validos = [];
        $productos_sin_stock = [];
        $total = 0;

        foreach ($carrito_contents as $item){
            $producto = $productoModel->getProducto($item[id]);
        }
    }
}