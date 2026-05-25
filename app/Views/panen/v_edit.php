<?= $this->extend('layout/v_template') ?>

<?php /** @var array $panen */ ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800">
    Edit Data Panen
</h1>

<form action="<?= base_url('panen/update/' . $panen['id']) ?>" method="post">

    <div class="mb-3">

        <label>Kode Batch</label> 

        <input type="text"
            name="kode_batch"
            class="form-control"
            value="<?= $panen['kode_batch'] ?>">

    </div>

    <div class="mb-3">

        <label>Lokasi Sawah</label>

        <input type="text"
            name="lokasi_sawah"
            class="form-control"
            value="<?= $panen['lokasi_sawah'] ?>">

    </div>

    <div class="mb-3">

        <label>Jenis Padi</label>

        <input type="text"
            name="jenis_padi"
            class="form-control"
            value="<?= $panen['jenis_padi'] ?>">

    </div>

    <div class="mb-3">

        <label>Tanggal Panen</label>

        <input type="date"
            name="tanggal_panen"
            class="form-control"
            value="<?= $panen['tanggal_panen'] ?>">

    </div>

    <div class="mb-3">

        <label>Jumlah Panen</label>

        <input type="number"
            name="jumlah_panen"
            class="form-control"
            value="<?= $panen['jumlah_panen'] ?>">

    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

</form>

<?= $this->endSection() ?>