<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Arsip DataTable
                    <!-- <a href="<?php echo BASE_URL; ?>pages/arsip/arsip_tambah.php" class="btn btn-primary float-right">
                        <i class="fas fa-plus mr-2"></i> Tambah
                    </a> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>Arsip</th>
                                    <th>Kategori</th>
                                    <th>Petugas</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>17:07:30 12-10-2019</td>
                                    <td><a href="arsip_detail.php">
                                        <u>
                                        <li><b>Kode:</b> KD-ARSIP-2019</li>
                                        <li><b>Nama:</b> Contoh Surat Izin Pelaksanaan</li>
                                        <li><b>Jenis:</b> pdf</li>
                                        </u>
                                        </a>
                                    </td>
                                    <td>Surat Kesehatan Pegawai</td>
                                    <td>Jamilah Suanda</td>
                                    <td>Contoh Surat Cuti Sakit Pegawai Baru</td>
                                    <td>
                                        <a href="arsip_detail.php" class="btn btn-warning btn-sm">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        &nbsp;
                                        <a href="" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL; ?>assets/demo/datatables-demo.js"></script>
    <?php include  __DIR__ . '/../../inc/footer.php'; ?>