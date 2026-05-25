<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePanen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'kode_batch' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'lokasi_sawah' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'jenis_padi' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal_panen' => [
                'type' => 'DATE',
            ],
            'jumlah_panen' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('panen');
    }

    public function down()
    {
        $this->forge->dropTable('panen');
    }
}