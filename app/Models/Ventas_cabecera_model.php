<?php

namespace App\Models;
use CodeIgniter\Model;

class Ventas_cabecera_model extends Model
{
    protected $table = 'ventas_cabecera';
    protected $primaryKey = 'venta_id';
    protected $allowedFields = ['fecha', 'usuario_id', 'metodo_pago', 'subtotal', 'descuento','total_venta', 'medio_entrega', 'estado_venta'];


    public function getBuilderVentas_cabecera(){
        //conecta a la base de datos usando el helper de configuracion de codeigniter
        $db = \Config\Database::connect();
        //crea un query builder sobre la tabla ventas_cabecera, lo cual permite construir
        //consultas SQL
        $builder = $db->table('ventas_cabecera');
        $builder->select('*');//se seleccionan todas las columnas
        //se realiza un JOIN con la tabla usuarios usando la relacion entre usuarios.id y 
        //ventas _cabecera.usuario_id
        $builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');
        
        
        return $builder;
    }

    //esta funcion devuelve las ventas segun si se pasa o los valores
    public function getVentas($usuario_id = null, $estado_venta = null, $fecha_desde = null, 
    $fecha_hasta = null, $medio_envio = null){
        $builder = $this->getBuilderVentas_cabecera(); // Obtiene la base de la consulta

        // Aplica el filtro de usuario_id si existe y no está vacío
        if($usuario_id !== null && $usuario_id !== ''){
            $builder->where('ventas_cabecera.usuario_id', $usuario_id);
        }

        // Aplica el filtro de estado_venta si existe y no está vacío
        if($estado_venta !== null && $estado_venta !== ''){
            $builder->where('ventas_cabecera.estado_venta', $estado_venta);
        }

        // Aplica los filtros de fecha si existen y no están vacíos
        if($fecha_desde !== null && $fecha_desde !== ''){
            $builder->where('ventas_cabecera.fecha >=', $fecha_desde . ' 00:00:00');
        }
        if($fecha_hasta !== null && $fecha_hasta !== ''){
            $builder->where('ventas_cabecera.fecha <=', $fecha_hasta . ' 23:59:59');
        }
        if($medio_envio !== null && $medio_envio !== ''){
            $builder->where('ventas_cabecera.medio_entrega <=', $medio_envio);
        }

        $builder->orderBy('fecha', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function getCabecera($ventaId)
    {
        $builder = $this->db->table('ventas_cabecera'); 
        $builder->select('*');

        $builder->join('usuarios', 'usuarios.id = ventas_cabecera.usuario_id');
        $builder->join('direcciones_ventas', 'direcciones_ventas.venta_id = ventas_cabecera.venta_id');

        $builder->where('ventas_cabecera.venta_id', $ventaId); 
        $query = $builder->get();

        return $query->getRowArray();
    }
}