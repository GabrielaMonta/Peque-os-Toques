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
        $usuario = new Usuarios_model();

        $cart = \Config\Services::cart();

        $productos_validos = [];
        $productos_sin_stock = [];
        $productos_disminuir_stock = [];
        $subtotal = 0;

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

            } else if($stockTemporal[$idProducto] > 0 && $item['qty'] > $stockTemporal[$idProducto] ){
                $nuevaCantidad = $stockTemporal[$idProducto];
                $productos_disminuir_stock[] = $item['name'];

                $data = array(
                    'rowid'   => $item['rowid'], 
                    'qty'     => $nuevaCantidad,
                );
                $cart->update($data);
                
                // Actualiza item localmente
                $item['qty'] = $nuevaCantidad;
                $item['subtotal'] = $item['price'] * $nuevaCantidad;

                // Actualiza stock temporal
                $stockTemporal[$idProducto] = 0;
            }else{
                $productos_sin_stock[] = $item['name'];
                $cartController->eliminar_item($item['rowid']);
            }
        }

        $mensajeTemporal = [];


        if (!empty($productos_sin_stock)) {
            $mensajeTemporal[] = 'Los siguientes productos no tienen stock y fueron eliminados del carrito: ' . implode(', ', $productos_sin_stock) . '.';
        }

        if (!empty($productos_disminuir_stock)) {
            $mensajeTemporal[] = 'La cantidad de los siguientes productos no es suficiente y fueron modificadas: ' . implode(', ', $productos_disminuir_stock) . '.';
        }

        if (!empty($mensajeTemporal)) {
            $mensajeFinal = 'Su compra no pudo ser procesada. Por favor, revise los siguientes puntos: ' . implode(' ', $mensajeTemporal);
            $session->setFlashdata('mensaje', $mensajeFinal);
            return redirect()->to(base_url('verCarrito'));
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

        $usuarioData = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'dni' => $this->request->getPost('dni'),
            'telefono' => $this->request->getPost('telefono'),
            'email' => $session->get('email'),

        ];
        $id = session()->get('id');
        $usuario->update($id, $usuarioData);


        // Vaciar carrito, confirmar venta y volver a compras
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
