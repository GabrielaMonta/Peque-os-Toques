<?php

namespace App\Models;
use CodeIgniter\Model;

class Producto_model extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre_prod', 'imagen', 'categoria_id', 'precio', 'precio_vta', 'stock', 'stock_min','eliminado','genero','color','tipo','descripcion'];

     public function getProductoAll()
    {
        return $this->where('eliminado', 'NO')->findAll();
    }

    public function filtrarProductos($categoria = null, $orden = null, $buscar = null, $estado = 'NO')
    {
        $builder = $this->where('eliminado', $estado); // filtro principal

        if (!empty($categoria)) {
            $builder->where('categoria_id', $categoria);
        }

        if (!empty($buscar)) {
            $builder->like('nombre_prod', $buscar);
        }

        if (!empty($orden)) {
            switch ($orden) {
                case 'precio_asc':
                    $builder->orderBy('precio', 'ASC');
                    break;
                case 'precio_desc':
                    $builder->orderBy('precio', 'DESC');
                    break;
                case 'reciente':
                    $builder->orderBy('id', 'DESC');
                    break;
                case 'stock':
                    $builder->orderBy('stock', 'DESC');
                    break;
            }
        }
    
        return $builder;
    }

    public function getProducto($id)
    {
    return $this->where('id', $id)->first();
    }

}