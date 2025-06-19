<?php

namespace App\Controllers;
use App\Models\Usuarios_model;
use App\Models\Categoria_model;
use App\Models\Producto_model;
use App\Models\Consulta_model;
use CodeIgniter\Controller;
use App\Models\Ventas_cabecera_model;
use App\Models\Ventas_detalle_model;


class AdminController extends BaseController
{
    /*Panel admin*/
    public function panelAdmin()
    {
         // Últimos usuarios registrados
        $usuarioModel = new Usuarios_model();
        $ultimosUsuarios = $usuarioModel
            ->where('baja', 'NO')
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Productos con stock bajo
        $productoModel = new Producto_model();
        $productosBajoStock = $productoModel
            ->where('eliminado', 'NO')
            ->where('stock <=', 1)
            ->orderBy('stock', 'ASC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Últimas consultas
        $consultaModel = new Consulta_model();
        $ultimasConsultas = $consultaModel
            ->where('respuesta', 'NO')
            ->orderBy('id_consulta', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        $pendientes = $consultaModel
        ->where('respuesta', 'NO')
        ->countAllResults();

        // Enviar los datos a la vista
        $data = [
            'titulo' => 'Panel de Administración',
            'ultimosUsuarios' => $ultimosUsuarios,
            'productosBajoStock' => $productosBajoStock,
            'ultimasConsultas' => $ultimasConsultas,
            'consultasPendientes' => $pendientes,
        ];

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/plantilla_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function crudUsuarios()
    {
        $model = new Usuarios_model();

        $tipo = $this->request->getGet('tipo'); // perfil_id
        $baja = $this->request->getGet('baja');
        $orden = $this->request->getGet('orden');
        $buscar = $this->request->getGet('buscar');

        $usuariosQuery = $model->filtrarUsuarios($tipo, $baja, $orden, $buscar);

        $data['titulo'] = 'CRUD Usuarios';
        $data['usuarios'] = $usuariosQuery->paginate(10, 'usuarios');
        $data['pager'] = $model->pager;

        // Para usar en los selects (opcional si tenés tabla perfiles)
        $data['tipoSeleccionado'] = $tipo;
        $data['bajaSeleccionado'] = $baja;
        $data['ordenSeleccionado'] = $orden;
        $data['buscar'] = $buscar;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_usuarios', $data);
        echo view('front/admin/footer_admin', $data);
    }


    public function crudProductos()
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();

        // Obtener filtros desde la URL
        $categoria = $this->request->getGet('categoria');
        $orden = $this->request->getGet('orden');
        $buscar = $this->request->getGet('buscar');
        $estado = $this->request->getGet('estado');

        // Traducimos el estado a valor de base de datos
        $estadoFiltro = ($estado === 'eliminado') ? 'SI' : 'NO';

        // Obtener productos filtrados con estado incluido
        $productosFiltrados = $productoModel->filtrarProductos($categoria, $orden, $buscar, $estadoFiltro);
        
        // Paginación (10 por página)
        $data['productos'] = $productosFiltrados->paginate(15, 'productos');
        $data['pager'] = $productoModel->pager;

        // Categorías para el filtro
        $data['categorias'] = $categoriaModel->getCategorias();
        $data['titulo'] = 'CRUD Productos';
        $data['estado'] = $estado;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/crud_productos', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function setup()
    {  
        $data['titulo'] = 'Admin';
        echo view('front/head', $data);
        echo view('front/admin/setup_admin', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function consultas()
    {
        $model = new Consulta_model();

        $filtro = $this->request->getGet('estado'); // 'SI', 'NO' o null

        if ($filtro === 'SI' || $filtro === 'NO') {
            $model->where('respuesta', $filtro);
    }
        
        $data['consultas'] = $model->orderBy('id_consulta', 'DESC')->paginate(10);
        $data['pager'] = $model->pager;
        $data['titulo'] = 'Consultas';
        $data['estado' ] = $filtro;

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/consultas', $data);
        echo view('front/admin/footer_admin', $data);
    }

    public function editarUsuario($id)
    {
        $model = new Usuarios_model();
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
