<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'auto_increment' => true],
            'razonsocial'   => ['type' => 'VARCHAR', 'constraint' => 150],
            'direccion'     => ['type' => 'VARCHAR', 'constraint' => 200],
            'ruc'           => ['type' => 'VARCHAR', 'constraint' => 11],
            'telefono'      => ['type' => 'VARCHAR', 'constraint' => 9],
            'representante' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('proveedores');
    }

    public function down()
    {
        $this->forge->dropTable('proveedores');
    }
}