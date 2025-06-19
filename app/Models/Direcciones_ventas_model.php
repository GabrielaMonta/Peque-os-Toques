<?php

namespace App\Models;
use CodeIgniter\Model;

class Direcciones_ventas_model extends Model
{
    protected $table = 'direcciones_ventas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'venta_id', 'pais', 'calle', 'altura', 
    'piso/dpto', 'cp', 'localidad', 'provincia', 'observaciones'];
}
