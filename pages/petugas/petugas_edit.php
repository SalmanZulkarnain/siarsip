<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Edit Petugas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Form Edit Petugas</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Form Edit Petugas
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleNama1">Nama</label>
                            <input type="text" class="form-control" value="Kevin Adisurya" id="exampleNama1" />
                        </div> 

                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleUsername1">Username</label>
                            <input type="text" class="form-control" value="Kepin" id="exampleUsername1" />
                        </div> 

                        <!-- input password -->
                        <div class="form-group">
                            <label for="examplePassword1">Password</label>
                            <input type="password" class="form-control" value="*****" id="examplePassword1" />
                        </div>
                        
                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">File</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="petugas.php" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>