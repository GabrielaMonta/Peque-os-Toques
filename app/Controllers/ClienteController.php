<?php
namespace App\Controllers;

use App\Models\Usuarios_model;
use App\Models\Direcciones_model;
use CodeIgniter\Controller;

class ClienteController extends  BaseController {
public function clienteActualizarPerfil()
    {
        
    $model = new Usuarios_model(); // instanciamos el modelo
    $session = session();
    
    $id = $this->request->getVar('id');

    
    $data = [];
        $nombre = $this->request->getPost('nombre');
        if ($nombre !== null && $nombre !== '') {
            $data['nombre'] = $nombre;
        }

        $apellido = $this->request->getPost('apellido');
        if ($apellido !== null && $apellido !== '') {
            $data['apellido'] = $apellido;
        }

        $dni = $this->request->getPost('dni');
        if ($dni !== null && $dni !== '') {
            $data['dni'] = $dni;
        }

        $telefono = $this->request->getPost('telefono');
        if ($telefono !== null && $telefono !== '') {
            $data['telefono'] = $telefono;
        }

        $fecha_nacimiento = $this->request->getPost('fecha_nacimiento');
        if ($fecha_nacimiento !== null && $fecha_nacimiento !== '') {
            $data['fecha_nacimiento'] = $fecha_nacimiento;
        }

        $usuario = $this->request->getPost('usuario');
        if ($usuario !== null && $usuario !== '') {
            $data['usuario'] = $usuario;
        }

        $email = $this->request->getPost('email');
        if ($email !== null && $email !== '') {
            $data['email'] = $email;
        }

    if (!empty($id) && !empty($data)) {
        
        $model->update($id, $data);
    }

    return redirect()->to('/cuenta')->with('mensaje', 'Perfil actualizado correctamente.');
    }

    public function clientePerfil()
    {
        $session = session();
        $id = $session->get('id');

        // Traer el usuario actualizado desde la base
        $model = new \App\Models\Usuarios_model();
        $usuario = $model->find($id);

        $data = [
            'titulo' => 'Mi cuenta',
            'usuario' => $usuario,
            'cart'   => $this->cart,
        ];

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/cliente/perfil', $data);
        echo view('front/footer', $data);
    }


    public function editarPerfil()
    {
        $session = session();
        $id = $session->get('id');

        // Traer el usuario actualizado desde la base
        $model = new \App\Models\Usuarios_model();
        $usuario = $model->find($id);

        $data = [
            'titulo' => 'Editar perfil',
            'usuario' => $usuario,
            'cart'   => $this->cart,
        ];
        
        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('back/cliente/editarPerfil', $data);
        echo view('front/footer', $data);
    }

    public function misDirecciones()
    {
        $session = session();
        $id = $session->get('id');

        // buscar todas las direcciones que tenga este id
        $model = new \App\Models\Direcciones_model();
        $direcciones = $model->where('usuario_id', $id) ->findAll();

        $data = [
            'titulo' => 'Mis direcciones',
            'direcciones' => $direcciones,
            'cart'   => $this->cart,
        ];

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/cliente/misDirecciones', $data);
        echo view('front/footer', $data);
    }

    public function nuevaDireccion(){
        
        $data = [
            'titulo' => 'Nueva dirección',
            'cart'   => $this->cart,
        ];

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/cliente/nuevaDireccion', $data);
        echo view('front/footer', $data);
    }    

    public function agregarDireccion()
    {
        
    $model = new Direcciones_model(); // instanciamos el modelo
    $session = session();
    
    $id = $session->get('id');


    
    $data = [
        'usuario_id'    => $id,
        'calle'         => $this->request->getPost('calle'),
        'altura'        => $this->request->getPost('altura'),
        'piso/dpto'     => $this->request->getPost('piso/dpto'),
        'localidad'     => $this->request->getPost('localidad'),
        'provincia'     => $this->request->getPost('provincia'),
        'pais'          => $this->request->getPost('pais'),
        'cp'            => $this->request->getPost('cp'),
        'observaciones' => $this->request->getPost('observaciones'),
        
    ];

    if (!empty($id) && !empty($data)) {
        $model->insert($data);
    }

    return redirect()->to('/direcciones')->with('msg', 'Direccion agregada correctamente.');
    }
    
    public function editarDireccion($id){
        //traer a direccion desde la base de datos
        $model = new Direcciones_model();
        $direccion = $model->find($id);

        $data = [
            'titulo' => 'Editar dirección',
            'direccion' => $direccion,
            'cart'   => $this->cart,
        ] ;

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('back/cliente/editarDireccion', $data);
        echo view('front/footer', $data);
    }  

    public function actualizarDireccion($id){
        $model = new Direcciones_model();

        $data = [
            'calle'         => $this->request->getPost('calle'),
            'altura'        => $this->request->getPost('altura'),
            'piso/dpto'     => $this->request->getPost('piso/dpto'),
            'localidad'     => $this->request->getPost('localidad'),
            'provincia'     => $this->request->getPost('provincia'),
            'pais'          => $this->request->getPost('pais'),
            'cp'            => $this->request->getPost('cp'),
            'observaciones' => $this->request->getPost('observaciones'),
        ];
        if (!empty($id) && !empty($data)) { 
            $model->update($id, $data);
        }

        return redirect()->to('/direcciones')->with('msg', 'Direccion modificada correctamente.');        
    }   

    public function eliminarDireccion($id){
        $model = new Direcciones_model();
        // Verificamos que exista la dirección antes de intentar borrarla
        $direccion = $model->find($id);

        if ($direccion) {
            $model->delete($id);
            return redirect()->to('/direcciones')->with('msg', 'Dirección eliminada correctamente.');
        } else {
            return redirect()->to('/direcciones')->with('error', 'La dirección no existe.');
        }
    }

    public function misCompras()
    {
    $data = [
        'titulo'    => 'Compras',
        'cart'   => $this->cart,
    ];
    echo view('front/head', $data);
    echo view('front/navbar', $data);
    echo view('front/cliente/misCompras', $data);
    echo view('front/footer', $data);
    }

   public function iniciarPago()
    {
    $modelDir = new Direcciones_model(); // 
    $modelUsu = new Usuarios_model(); // 

    $session = session();
    $id = $session->get('id');

    // Traer el usuario actualizado desde la base
    $usuario = $modelUsu->find($id);
    $direccion = $modelDir->where('usuario_id', $id)->orderBy('id', 'DESC')->first();  
    
    $data = [
        'titulo' => 'Pequeños Toques',
        'direccion' => $direccion,
        'usuario' => $usuario,
        'cart'   => $this->cart,
    ];

    echo view('front/head', $data);
    echo view('front/navbar', $data);
    echo view('front/Carrito/iniciarPago', $data);
    echo view('front/footer', $data);
    }
}