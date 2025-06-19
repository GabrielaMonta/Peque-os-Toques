<?php
namespace App\Controllers;

use App\Models\Consulta_model;
use CodeIgniter\Controller;

class ConsultaController extends BaseController{
    
    public function atender_consultas($id = null)
    {
        $model = new Consulta_model();
        $consulta = $model->find($id);

        $data = [
            'titulo' => 'Atender Consulta',
            'consulta' => $consulta
        ];

        echo view('front/head', $data);
        echo view('front/admin/navbar_admin', $data);
        echo view('front/admin/atender_consultas', $data);
        echo view('front/admin/footer_admin', $data);
    }

    
    public function responder($id)
    {
         $model = new Consulta_model();
        $consulta = $model->find($id);

        if (!$consulta) {
            return redirect()->to(base_url('consultas'))->with('error', 'Consulta no encontrada.');
        }

        $mensajeRespuesta = $this->request->getPost('respuesta');

        // Enviar el correo
        $email = \Config\Services::email();
        $email->setFrom('pequenostoques@gmail.com', 'Pequeños Toques');
        $email->setTo($consulta['email']);
        $email->setSubject('Respuesta a tu consulta');
        $email->setMessage("Hola " . $consulta['nombre'] . ":\n\n" . $mensajeRespuesta . "\n\n¡Gracias por contactarnos!");

        if ($email->send()) {
            // Si se envió el mail, marcamos como respondida
            $model->update($id, ['respuesta' => 'SI']);
            return redirect()->to(base_url('consultas'))->with('success', 'Respuesta enviada correctamente al correo del usuario.');
        } else {
            return redirect()->back()->with('error', 'No se pudo enviar el correo. Verificá la configuración.');
        }
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
            'telefono'  => $this->request->getPost('telefono'), 
            'respuesta' => 'NO' // Valor por defecto
        ];

        $model->insert($data);

        // Redireccionamos a la vista de contacto con el mensaje de alerta
        return redirect()->to(base_url('/contacto'))->with('success', '¡Consulta enviada con éxito!');
    }

}