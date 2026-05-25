<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDistribusi extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'penggilingan_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],

            'tujuan_distribusi' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],

            'tanggal_distribusi' => [
                'type' => 'DATE',
            ],

            'status_distribusi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'penggilingan_id',
            'penggilingan',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('distribusi');
    }

    public function down()
    {
        $this->forge->dropTable('distribusi');
    }
}