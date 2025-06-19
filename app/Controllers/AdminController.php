<?php

namespace App\Controllers;
use App\Models\Usuarios_model;
use CodeIgniter\Controller;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;

class AdminController extends BaseController
{
    /*Panel admin*/
    public function panelAdmin()
    {
        $data['titulo'] = 'Aministrador';
        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/plantilla_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudUsuarios()
    {
        $model = new \App\Models\Usuarios_model();
        $usuarios = $model->where('baja', 'NO')->findAll();

        $data['titulo'] = 'CRUD Usuarios';
        $data['usuarios'] = $usuarios;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_usuarios', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudProductos()
    {
        $model = new \App\Models\Producto_model();
        $producto = $model->where('eliminado', 'NO')->findAll();

        $data['titulo'] = 'CRUD Productos';
        $dato['productos'] = $producto;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_productos', $dato);
        echo view('front/admin/footer_admin', $data);
    }

    

    public function setup()
    {
        $data['titulo'] = 'Admin';
        echo view('front/head', $data);
        echo view('front/admin/setup_admin', $data);
        echo view('front/admin/footer_admin', $data);

    }
    public function editarUsuario($id)
    {
        $model = new \App\Models\Usuarios_model();
        $usuario = $model->find($id);

        if (!$usuario) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuario no encontrado');
        }

        $data['titulo'] = 'Editar Usuario';
        $data['usuario'] = $usuario;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/editar_usuario', $data); 
        echo view('front/admin/footer_admin', $data);
    }
    
    public function ventas()
    {
        
        $cabeceraModel = new Ventas_cabecera_model();
        $usuario_id = $this->request->getVar('usuario_id');
        
        
        $estado_venta = $this->request->getVar('estado_venta');
        $fecha_desde = $this->request->getVar('fecha_desde');   
        $fecha_hasta = $this->request->getVar('fecha_hasta');  
        $medio_entrega = $this->request->getVar('medio_entrega'); 
        
        $ventas = $cabeceraModel->getVentas($usuario_id, $estado_venta, $fecha_desde, $fecha_hasta, $medio_entrega);

       
        $data = []; 
        $data['titulo'] = 'Ventas'; 

        $data['ventas'] = $ventas;
        $data['usuario_id_seleccion'] = $usuario_id;
        $data['estado_venta_seleccion'] = $estado_venta;
        $data['fecha_desde_seleccion'] = $fecha_desde;
        $data['fecha_hasta_seleccion'] = $fecha_hasta;
        $data['medio_entrega_seleccion'] = $medio_entrega;
        
        $data['estados_disponibles'] = [
            'Pendiente',
            'Procesando',
            'En camino',
            'Entregado',
            'Cancelado',
        ];
        $data['medios_entrega_disponibles'] = [
            'Correo',
            'Retiro',
        ];

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/ventas', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function editarVentas($venta_id)
    {
        
        $detalleModel = new Ventas_detalle_model();
        $cabeceraModel = new Ventas_cabecera_model();

        $detalle= $detalleModel->getDetalles($venta_id);
        $cabecera = $cabeceraModel->getCabecera($venta_id);

        $data = [
            'titulo' => 'Detalle venta',
            'detalle' => $detalle,
            'cabecera' => $cabecera,
        ];

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/ventas-editar', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function actualizarEstadoVenta($venta_id){
        
        $cabeceraModel = new Ventas_cabecera_model();

        $venta_id = $this->request->getVar('venta_id');
        $nuevo_estado = $this->request->getVar('nuevo_estado');
        
        // Actualizar stock en la base de datos con el valor final simulado
        $cabeceraModel->update($venta_id, ['estado_venta' => $nuevo_estado]);

       
        return redirect()->to(base_url('admin/detalle-ventas' . $venta_id))->with('success','Estado actualizado correctamente');
    }
    
    
}
