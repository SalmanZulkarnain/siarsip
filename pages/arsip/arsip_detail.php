<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Preview Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Preview Arsip</li>
            </ol>
            <div class="card col-sm-6 mb-4 px-0">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Preview Arsip
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Kode Arsip</th>
                            <td>KD-ARSIP-2019</td>
                        </tr>
                        <tr>
                            <th>Waktu Upload</th>
                            <td>17:07:30 12-10-2019</td>
                        </tr>
                        <tr>
                            <th>Nama File</th>
                            <td>Contoh Surat Izin Pelaksanaan</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>Surat Kesehatan Pegawai</td>
                        </tr>
                        <tr>
                            <th>Jenis</th>
                            <td>pdf</td>
                        </tr>
                        <tr>
                            <th>Petugas Pengupload</th>
                            <td>Jamilah Suanda</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>Contoh Surat Cuti Sakit Pegawai Baru</td>
                        </tr>
                    </table>
                </div>
            </div>
            <a href="arsip.php" class="btn btn-secondary mb-4">Back</a>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>