<?php
namespace App\Controllers;
use CodeIgniter\Controller;
Use App\Models\Producto_model;
Use App\Models\Usuarios_model;
Use App\Models\Direcciones_model;
Use App\Models\Ventas_cabecera_model;
Use App\Models\Ventas_detalle_model;
Use App\Models\Direcciones_ventas_model;

class VentasController extends Controller{

    public function registrar_venta() {
    $session = session();

    require(APPPATH . 'Controllers/CarritoController.php');
    $cartController = new CarritoController();
    $carrito_contents = $cartController->devolver_carrito();
    $productoModel = new Producto_model();
    $ventasModel = new Ventas_cabecera_model();
    $detalleModel = new Ventas_detalle_model();
    $direccionModel = new Direcciones_model(); 
    $direccionVentaModel = new Direcciones_ventas_model(); 

    $cart = \Config\Services::cart();

    $productos_validos = [];
    $productos_sin_stock = [];
    $subtotal = 0;

    // Paso 1: construir mapa de stock actual
    $stockTemporal = [];

    foreach ($carrito_contents as $item) {
        $idProducto = $item['id'];
        if (!isset($stockTemporal[$idProducto])) {
            $producto = $productoModel->getProducto($idProducto);
            $stockTemporal[$idProducto] = $producto['stock'];
        }

        // Validación de stock simulando reducción en memoria
        if ($stockTemporal[$idProducto] >= $item['qty']) {
            $stockTemporal[$idProducto] -= $item['qty'];
            $productos_validos[] = $item;
            $subtotal += $item['subtotal'];
        } else {
            $productos_sin_stock[] = $item['name'];
            $cartController->eliminar_item($item['rowid']);
        }
    }

    // Si hay productos sin stock, notificar y cancelar la venta
    if (!empty($productos_sin_stock)) {
        $mensaje = 'Los siguientes productos no tienen stock suficiente y fueron eliminados del carrito: ' . implode(', ', $productos_sin_stock);
        $session->setFlashdata('mensaje', $mensaje);
        return redirect()->to(base_url('iniciar-compra'));
    }

    // Si no hay productos válidos
    if (empty($productos_validos)) {
        $session->setFlashdata('mensaje', 'No hay productos válidos para registrar la venta.');
        return redirect()->to(base_url('inicio'));
    }

    // Recuperar método de pago y entrega
    $metodo_pago = $this->request->getPost('metodo_pago');
    $medio_entrega = $this->request->getPost('medio_entrega');
    if (!$medio_entrega) {
        $session->setFlashdata('mensaje', 'Debe seleccionar un método de entrega.');
        return redirect()->back()->withInput();
    }

    $aplica_descuento = in_array($metodo_pago, ['Transferencia', 'Debito', 'Efectivo']);
    $descuento = $aplica_descuento ? $subtotal * 0.15 : 0;
    $total_venta = $subtotal - $descuento;

    // Registrar cabecera de venta
    $nueva_venta = [
        'usuario_id'    => $session->get('id'),
        'fecha'         => date('Y-m-d H:i:s'),
        'metodo_pago'   => $metodo_pago,
        'subtotal'      => $subtotal,
        'descuento'     => $descuento,
        'total_venta'   => $total_venta,
        'medio_entrega' => $medio_entrega,
    ];
    $venta_id = $ventasModel->insert($nueva_venta);

    // Registrar detalle y actualizar stock real
    foreach ($productos_validos as $item) {
        $detalle = [
            'venta_id'    => $venta_id,
            'producto_id' => $item['id'],
            'cantidad'    => $item['qty'],
            'precio'      => $item['subtotal'],
            'color'       => $item['options']['color'],
            'nota'        => $item['options']['nota'],
            
        ];
        $detalleModel->insert($detalle);

        // Actualizar stock en la base de datos con el valor final simulado
        $productoModel->update($item['id'], ['stock' => $stockTemporal[$item['id']]]);
    }

    // Guardar dirección si corresponde
    if ($this->request->getPost('guardar-direccion')) {
        $direccionData = [
            'usuario_id'    => $session->get('id'),
            'calle'         => $this->request->getPost('calle'),
            'altura'        => $this->request->getPost('altura'),
            'piso/dpto'     => $this->request->getPost('piso/dpto'),
            'localidad'     => $this->request->getPost('localidad'),
            'provincia'     => $this->request->getPost('provincia'),
            'cp'            => $this->request->getPost('cp'),
            'observaciones' => $this->request->getPost('observaciones'),
        ];
        $direccionModel->insert($direccionData);
    }

    $direccionVentaData = [
        'venta_id'      => $venta_id,
        'usuario_id'    => $session->get('id'),
        'calle'         => $this->request->getPost('calle'),
        'altura'        => $this->request->getPost('altura'),
        'piso/dpto'     => $this->request->getPost('piso/dpto'),
        'localidad'     => $this->request->getPost('localidad'),
        'provincia'     => $this->request->getPost('provincia'),
        'cp'            => $this->request->getPost('cp'),
        'observaciones' => $this->request->getPost('observaciones'),
    ];
    $direccionVentaModel->insert($direccionVentaData);

    // Vaciar carrito y confirmar venta
    $cart->destroy();
    $session->setFlashdata('mensaje', 'Venta registrada exitosamente');
    return redirect()->to(base_url('/mis-compras'));
}

    public function mis_compras()
    {
        $session = session(); 
        $id = $session->get('id');
        $cart = \Config\Services::cart();
        
        $cabeceraModel = new Ventas_cabecera_model();

        $cabecera = $cabeceraModel->getVentas($id);

          

        $data = [
            'titulo' => 'Compras',
            'cart'   => $cart,
            'compras' => $cabecera,
        ];

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/cliente/misCompras', $data); 
        echo view('front/footer', $data);
    }

    //funcion del usuario cliente para ver sus compras
    public function ver_detalle($venta_id){
        
        $detalleModel = new Ventas_detalle_model();
        $cabeceraModel = new Ventas_cabecera_model();

        $detalle= $detalleModel->getDetalles($venta_id);
        $cabecera = $cabeceraModel->getCabecera($venta_id);
        


        $data = [
            'titulo' => 'Pequeños toques',
            
            'detalle' => $detalle,
            'cabecera' => $cabecera,
            
        ];

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/cliente/verDetalleCompra', $data);
        echo view('front/footer', $data);
    }
}
