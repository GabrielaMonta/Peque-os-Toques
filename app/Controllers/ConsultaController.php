<?php
namespace App\Controllers;

use App\Models\Consulta_model;
use CodeIgniter\Controller;

class ConsultaController extends BaseController{
    
    public function atender_consultas($id = null)
    {
        $model = new Consulta_model();

        // Verificar si existe
        $consulta = $model->find($id);
        if ($consulta) {
            $model->update($id, ['respuesta' => 'SI']);
        }

        return redirect()->to(base_url('consultas'));
    }

    public function eliminar_consulta($id = null)
    {
        $model = new Consulta_model();

        $consulta = $model->find($id);
        if ($consulta) {
            $model->delete($id);
        }

        return redirect()->to(base_url('consultas'));
    }

    public function enviar()
    {
        $model = new Consulta_model();

        // Tomamos los datos del POST
        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'apellido'  => $this->request->getPost('apellido'),
            'email'     => $this->request->getPost('email'),
            'mensaje'   => $this->request->getPost('mensaje'),
            'telefono'  => $this->request->getPost('telefono'), // si lo agregás
            'respuesta' => 'NO' // Valor por defecto
        ];

        $model->insert($data);

        // Redireccionamos a la vista de contacto con el mensaje de alerta
        return redirect()->to(base_url('/contacto'))->with('success', '¡Consulta enviada con éxito!');
    }

}