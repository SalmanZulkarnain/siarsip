<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Riwayat Unduh</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Riwayat Unduh</li>
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
                    Riwayat Unduh DataTable
                    <!-- <a href="<?php echo BASE_URL; ?>pages/riwayat_unduh/riwayat_unduh_tambah.php" class="btn btn-primary float-right">
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
                                    <th>User</th>
                                    <th>Arsip yang diunduh</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu Upload</th>
                                    <th>User</th>
                                    <th>Arsip yang diunduh</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>17:10:07 14-10-2019</td>
                                    <td>Kepin</td>
                                    <td><a href="../arsip/arsip_detail.php"><u>Contoh Surat Izin Pelaksanaan</u></a></td>
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