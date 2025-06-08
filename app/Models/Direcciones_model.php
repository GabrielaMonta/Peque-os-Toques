<?php

namespace App\Models;
use CodeIgniter\Model;

class Direcciones_model extends Model
{
    protected $table = 'direcciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario_id', 'pais', 'calle', 'altura', 
    'piso/dpto', 'cp', 'localidad', 'provincia', 'observaciones'];
}
