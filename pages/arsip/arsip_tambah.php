<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="<?php echo BASE_URL; ?>pages/dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tambah Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus mr-1"></i>
                    Tambah Arsip
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleKodeArsip1">Kode Arsip</label>
                            <input type="text" class="form-control" id="exampleKodeArsip1" autofocus/>
                        </div> 

                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleNamaArsip1">Nama Arsip</label>
                            <input type="text" class="form-control" id="exampleNamaArsip1" />
                        </div> 

                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleKategori1">Kategori</label>
                            <select class="form-control" id="exampleKategori1">
                                <option selected disabled>Pilih Kategori</option>
                                <option>Surat Kesehatan Pegawai</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="exampleFormControlKeterangan1">Keterangan</label>
                            <textarea class="form-control" id="exampleFormControlKeterangan1" rows="3"></textarea>
                        </div>
                        
                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1" />
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="arsip.php" class="btn btn-link">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>