<?php

namespace App\Controllers;

use App\Models\ProveedorModel;
use App\Controllers\BaseController;

class Proveedor extends BaseController
{
    public function index(): string
    {
        $model = new ProveedorModel();
        $data = [
            'proveedores' => $model->findAll(),
            'header'      => view('Partials/header'),
            'footer'      => view('Partials/footer'),
        ];
        return view('Modulos/proveedores/index', $data);
    }

    public function registrarProveedor(): string
    {
        $data = [
            'header' => view('Partials/header'),
            'footer' => view('Partials/footer'),
        ];
        return view('Modulos/proveedores/registrarProveedor', $data);
    }

    public function guardar()
    {
        $model = new ProveedorModel();
        $model->save([
            'razonsocial'   => $this->request->getPost('razonsocial'),
            'direccion'     => $this->request->getPost('direccion'),
            'ruc'           => $this->request->getPost('ruc'),
            'telefono'      => $this->request->getPost('telefono'),
            'representante' => $this->request->getPost('representante'),
        ]);
        return redirect()->to(base_url('proveedores'));
    }

    public function eliminar($id)
    {
        $model = new ProveedorModel();
        $model->delete($id);
        return redirect()->to(base_url('proveedor'));
    }
}