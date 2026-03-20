<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Controllers\BaseController;

class Producto extends BaseController
{
    public function index(): string
    {
        $model = new ProductoModel();
        $data = [
            'productos' => $model->findAll(),
            'header'    => view('Partials/header'),
            'footer'    => view('Partials/footer'),
        ];
        return view('Modulos/productos/index', $data);
    }

    public function registrarProducto(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/productos/registrarProducto', $data);
    }

    public function guardar()
    {
        $model = new ProductoModel();
        $model->save([
            'tipo'        => $this->request->getPost('tipo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio'      => $this->request->getPost('precio'),
            'stock'       => $this->request->getPost('stock'),
        ]);
        return redirect()->to(base_url('productos'));
    }

    public function eliminar($id)
    {
        $model = new ProductoModel();
        $model->delete($id);
        return redirect()->to(base_url('productos'));
    }
}