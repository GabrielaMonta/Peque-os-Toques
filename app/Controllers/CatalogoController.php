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

        $categoria_id = null;

        //Filtro del formulario
        $categoria_id = $this->request->getVar('categoria') ?? null;
        $ordenar_por = $this->request->getVar('ordenar') ?? 'relevancia';
        $genero_filtros = $this->request->getVar('genero') ?? []; //porque son checkboxes multiples
        $color_filtros = $this->request->getVar('color') ?? [];
        $tipo_filtros = $this->request->getVar('tipo') ?? [];
        $buscar = $this->request->getVar('buscar');

        $query = $productoModel->where('eliminado', 'NO');

        // Aplicar filtro categoría si hay
        if ($categoria_id && $categoria_id !== 'todo') {
            $query->where('categoria_id', $categoria_id);
        }

        // Buscar por texto
        if ($buscar) {
            $query->groupStart()
                ->like('nombre_prod', $buscar)
                ->orLike('descripcion', $buscar)
                ->groupEnd();
        }

        // Filtrar por género
        if (!empty($genero_filtros)) {
            $query->whereIn('genero', $genero_filtros);
        }

        // Filtrar por color 
        if (!empty($color_filtros)) {
            $query->groupStart();
            foreach ($color_filtros as $color) {
                $query->orLike('color', $color); 
            }
            $query->groupEnd();
        }

        // Filtrar por tipo
        if (!empty($tipo_filtros)) {
            $query->whereIn('tipo', $tipo_filtros); // Mejor que orLike
        }

        // Ordenado
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

        // Paginacion
        $data['productos'] = $query->paginate(15, 'productos');
        $data['pager'] = $query->pager;

        // Obtener los tipos disponibles según la categoría
        $tipo_disponibles = [];
        $tipoQuery = $productoModel
            ->distinct()               // Aquí indicás DISTINCT
            ->select('tipo')           // Solo el nombre de la columna sin 'DISTINCT'
            ->where('eliminado', 'NO');

        if ($categoria_id && $categoria_id !== 'todo') {
            $tipoQuery->where('categoria_id', $categoria_id);
        }

        $tipo_disponibles = $tipoQuery->orderBy('tipo', 'ASC')->findColumn('tipo');
        $data['tipo_disponibles'] = $tipo_disponibles;

        // Datos de la vista
        $data['categorias'] = $categoriaModel->getCategorias();
        $data['ordenar_por'] = $ordenar_por;
        $data['buscar'] = $buscar;
        $data['cart'] = $this->cart;

        // Para mantener seleccionados los filtros en la vista
        $data ['genero_filtros'] = $genero_filtros;
        $data ['color_filtros'] = $color_filtros;
        $data ['tipo_filtros'] = $tipo_filtros;
        $data['categoria_id'] = $categoria_id;

        // Título dinámico según categoría
        if ($categoria_id && $categoria_id !== 'todo') {
            $categoria_info = $categoriaModel->find($categoria_id);
            $data['titulo'] = $categoria_info ? 'Categoría: ' . $categoria_info['nombre'] : 'Categoría desconocida';
            $data['categoria_nombre'] = $categoria_info['nombre'] ?? 'Desconocida';
        } else {
            $data['titulo'] = 'Nuestro Catálogo';
            $data['categoria_nombre'] = 'Todo';
        }

        echo view('front/head', $data);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data);
        echo view('front/footer');
    }
    

    public function detalle($id)
    {
        $cart = \Config\Services::cart();

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
        $data['cart']   = $cart;

        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/detalleProducto', $data);
        echo view('front/footer');
    }

    public function novedades()
    {
        $productoModel = new Producto_model();
        $categoriaModel = new Categoria_model();

        $categorias = $categoriaModel->findAll();
        $productos = [];
        $categoria_id = null;

        foreach ($categorias as $categoria) {
            $ultimos = $productoModel
                ->where('categoria_id', $categoria['id'])
                ->where('eliminado', 'NO')
                ->orderBy('id', 'DESC')
                ->findAll(5);

            $productos = array_merge($productos, $ultimos);
        }

        $data['productos'] = $productos;
        $data['categorias'] = $categoriaModel->getCategorias();
        $data['ordenar_por'] = 'relevancia';
        $data['cart'] = $this->cart;
        $data['categoria_nombre'] = 'Novedades';
        $data['categoria_id'] = $categoria_id;

        $dato['titulo'] = 'Novedades';

        echo view('front/head', $dato);
        echo view('front/navbar', $data);
        echo view('front/catalogo/verTodo', $data); 
        echo view('front/footer');
    }
}