<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableStudent extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id',
            'nome' => ['type' => 'varchar', 'constraint' => 100],
            'endereco' => ['type' => 'varchar', 'constraint' => 150],
            'foto' => ['type' => 'varchar', 'constraint' => 80],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }

}
