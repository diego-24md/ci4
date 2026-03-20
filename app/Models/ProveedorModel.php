<?php

namespace App\Models;

use CodeIgniter\Model;

class ProveedorModel extends Model
{
    protected $table         = 'proveedores';
    protected $primaryKey    = 'id';
    protected $allowedFields = [
        'razonsocial',
        'direccion',
        'ruc',
        'telefono',
        'representante'
    ];
}