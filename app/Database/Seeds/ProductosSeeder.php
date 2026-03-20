<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tipo'        => 'Electrónico',
                'descripcion' => 'Laptop HP 15 pulgadas',
                'precio'      => 2500.00,
                'stock'       => 10,
            ],
            [
                'tipo'        => 'Electrónico',
                'descripcion' => 'Mouse inalámbrico Logitech',
                'precio'      => 85.00,
                'stock'       => 50,
            ],
            [
                'tipo'        => 'Oficina',
                'descripcion' => 'Resma de papel A4',
                'precio'      => 25.00,
                'stock'       => 100,
            ],
        ];

        $this->db->table('productos')->insertBatch($data);
    }
}