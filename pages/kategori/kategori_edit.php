<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="<?php echo BASE_URL; ?>pages/dashboard.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Kategori</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-pen mr-1"></i>
                    Edit Kategori
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleInputKategori1">Nama Kategori</label>
                            <input type="text" class="form-control" id="exampleInputKategori1" value="Elektronik"/>
                        </div> 

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="exampleFormControlDeskripsi1">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlDeskripsi1" rows="3">Semua yang berhubungan dengan elektronik</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="kategori.php" class="btn btn-link">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>