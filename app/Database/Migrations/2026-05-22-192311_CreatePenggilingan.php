<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenggilingan extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'panen_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],

            'tanggal_giling' => [
                'type' => 'DATE',
            ],

            'kualitas_beras' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'catatan' => [
                'type' => 'TEXT',
                'null' => true,
            ],

        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'panen_id',
            'panen',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('penggilingan');
    }

    public function down()
    {
        $this->forge->dropTable('penggilingan');
    }
}