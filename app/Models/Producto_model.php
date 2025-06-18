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

    public function filtrarProductos($categoria = null, $orden = null, $buscar = null)
    {
        $builder = $this->where('eliminado', 'NO');

        if (!empty($categoria)) {
            $builder = $builder->where('categoria_id', $categoria);
        }

        if (!empty($buscar)) {
            $builder = $builder->groupStart()
                ->like('nombre_prod', $buscar)
                ->orLike('descripcion', $buscar)
                ->groupEnd();
        }

        switch ($orden) {
            case 'precio_asc':
                $builder->orderBy('precio', 'ASC');
                break;
            case 'precio_desc':
                $builder->orderBy('precio', 'DESC');
                break;
            case 'reciente':
                $builder->orderBy('id', 'DESC'); // suponiendo que "más reciente" = id más alto
                break;
            case 'stock':
                $builder->orderBy('stock', 'DESC');
                break;
            default:
                $builder->orderBy('id', 'ASC');
                break;
        }

        return $builder;
    }
}