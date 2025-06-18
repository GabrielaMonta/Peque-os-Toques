<?php

namespace App\Models;
use CodeIgniter\Model;

class Usuarios_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'apellido', 'dni', 'telefono', 'fecha_nacimiento', 'email', 'usuario', 'pass', 'perfil_id', 'baja'];

    public function filtrarUsuarios($tipo = null, $baja = null, $orden = null, $buscar = null)
    {
        $builder = $this->where('1=1');

        if ($tipo) {
            $builder->where('perfil_id', $tipo);
        }

        if ($baja !== null && $baja !== '') {
            $builder->where('baja', $baja);
        }

        if ($buscar) {
            $builder->groupStart()
                ->like('nombre', $buscar)
                ->orLike('apellido', $buscar)
                ->orLike('email', $buscar)
                ->orLike('usuario', $buscar)
                ->groupEnd();
        }

        if ($orden === 'reciente') {
            $builder->orderBy('id', 'DESC');
        } elseif ($orden === 'antiguo') {
            $builder->orderBy('id', 'ASC');
        }

        return $builder;
    }
}
