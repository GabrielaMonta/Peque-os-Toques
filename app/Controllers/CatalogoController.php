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

        // 1. Obtener productos activos (no eliminados)
        $data['productos'] = $productoModel->where('eliminado', 'NO')->findAll(); // <-- ¡Filtro agregado aquí!

        // 2. Obtener categorías
        $data['categorias'] = $categoriaModel->getCategorias();

        // Puedes agregar una variable para indicar que no hay categoría_actual si usas la misma vista 'catalogo'
        // $data['categoria_actual'] = null; 
        $data['cart']   = $this->cart;
        // 3. Preparar los datos para la vista
        $dato['titulo'] = 'Nuestro Catálogo';

        // 4. Cargar las vistas
        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data); // Asumo que catalogo-todo es tu vista principal
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