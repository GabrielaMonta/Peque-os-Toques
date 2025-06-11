<?php

namespace App\Controllers;

use App\Models\Producto_model;
use App\Models\Categoria_model; 

class CatalogoController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function index()
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();

        $ordenar_por = $this->request->getVar('ordenar') ?? 'relevancia';
        $query = $productoModel->where('eliminado', 'NO');

        switch ($ordenar_por) {
            case 'az':
                $query->orderBy('nombre_prod', 'ASC');
                break;
            case 'precio_menor_mayor':
                $query->orderBy('precio_vta', 'ASC');
                break;
            case 'precio_mayor_menor':
                $query->orderBy('precio_vta', 'DESC');
                break;
            case 'relevancia':
            default:
                $query->orderBy('id', 'DESC');
                break;
        }

        $data['productos'] = $query->findAll();
        $data['categorias'] = $categoriaModel->getCategorias();
        $data['ordenar_por'] = $ordenar_por;
        $data['cart'] = $this->cart;

        $dato['titulo'] = 'Nuestro Catálogo';

        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data);
        echo view('front/footer');
    }
    

   
    public function categoria($id)
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model(); 

        // Filtra por categoria_id y también asegura que no estén eliminados
        $data['productos'] = $productoModel->where('categoria_id', $id)
                                          ->where('eliminado', 'NO')
                                          ->findAll();

        $categoria_info = $categoriaModel->find($id);

        if ($categoria_info) {
            $dato['titulo'] = 'Categoría: ' . $categoria_info['nombre']; 
            $data['categoria_nombre'] = $categoria_info['nombre']; 
        } else {
            $dato['titulo'] = 'Categoría no encontrada';
            $data['categoria_nombre'] = 'Desconocida';
        }
        
        $data['categoria_id'] = $id; 
        $data['cart']   = $this->cart;

        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data); 
        echo view('front/footer');
    }

    public function detalle($id)
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();
        // Asegúrate de que el producto no esté eliminado cuando se accede directamente por ID
        $producto = $productoModel->where('eliminado', 'NO')->find($id); // Añade filtro aquí también

        if (!$producto) {
            // Producto no encontrado o eliminado, redirigir a 404 o catálogo
            return redirect()->to(base_url('catalogo'))->with('error', 'Producto no encontrado o no disponible.');
        }

        $data['producto'] = $producto;
        $dato['titulo'] = $producto['nombre_prod'];

        $categoria = $categoriaModel->find($producto['categoria_id']);
        $data['categoria_nombre'] = $categoria['nombre']; 
        $data['cart']   = $this->cart;

        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/detalleProducto', $data);
        echo view('front/footer');
    }
}