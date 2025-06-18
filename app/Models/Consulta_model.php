<?php
namespace App\Models;
use CodeIgniter\Model;

class Consulta_model extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id_consulta';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'telefono', 'mensaje', 'respuesta'];

    public function getConsultas()
    {
        return $this->findAll();
    }

    // Obtener una consulta por ID
    public function getConsulta($id)
    {
        return $this->find($id);
    }
    
}