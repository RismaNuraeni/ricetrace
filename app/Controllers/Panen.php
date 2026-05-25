<?php

namespace App\Controllers;

use App\Models\PanenModel;

class Panen extends BaseController
{
    protected $panenModel;

    public function __construct()
    {
        $this->panenModel = new PanenModel();
    }

    // dashboard
    public function index()
    {
        $data = [
            'title' => 'Dashboard Petani'
        ];

        return view('panen/v_dashboard', $data);
    }

    // tampil data panen
    public function dataPanen()
    {
        $data = [
            'title' => 'Data Panen',
            'panen' => $this->panenModel->findAll()
        ];

        return view('panen/v_index', $data);
    }

    // form tambah
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Panen'
        ];

        return view('panen/v_create', $data);
    }

    // simpan data
    public function store()
    {
        $this->panenModel->save([
            'user_id' => session()->get('id'),
            'kode_batch' => $this->request->getPost('kode_batch'),
            'lokasi_sawah' => $this->request->getPost('lokasi_sawah'),
            'jenis_padi' => $this->request->getPost('jenis_padi'),
            'tanggal_panen' => $this->request->getPost('tanggal_panen'),
            'jumlah_panen' => $this->request->getPost('jumlah_panen'),
        ]);

        return redirect()->to('/data-panen');
    }

    // form edit
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Panen',
            'panen' => $this->panenModel->find($id)
        ];

        return view('panen/v_edit', $data);
    }

    public function update($id)
    {
        $this->panenModel->update($id, [

            'kode_batch' => $this->request->getPost('kode_batch'),

            'lokasi_sawah' => $this->request->getPost('lokasi_sawah'),

            'jenis_padi' => $this->request->getPost('jenis_padi'),

            'tanggal_panen' => $this->request->getPost('tanggal_panen'),

            'jumlah_panen' => $this->request->getPost('jumlah_panen'),

        ]);

        return redirect()->to('/data-panen');
    }

    public function delete($id)
    {
        $this->panenModel->delete($id);

        return redirect()->to('/data-panen');
    }
}
