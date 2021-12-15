<?php
$title = 'Tambah Data Outlet';
require 'koneksi.php';

if (isset($_POST['btn-simpan'])) {
    $nama = $_POST['nama_outlet'];
    $alamat = $_POST['alamat_outlet'];
    $telp = $_POST['telp_outlet'];

    $query = "INSERT INTO outlet (nama_outlet, alamat_outlet, telp_outlet) values ('$nama', '$alamat', '$telp')";
    $insert = mysqli_query($conn, $query);
    if ($insert == 1) {
        $_SESSION['msg'] = 'Berhasil Menyimpan Data';
        header('location: outlet.php');
    } else {
        $_SESSION['msg'] = 'Gagal menambahkan data baru!!!';
        header('location: outlet.php');
    }
}

require 'header.php';
?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title" style="color: white ;">Forms</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="index.php">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow" style="color: white ;"></i>
                </li>
                <li class="nav-item">
                    <a href="outlet.php" style="color: white ;">Outlet</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#" style="color: white ;">Tambah Outlet</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card card-dark bg-primary-gradient ">
                    <div class="card-header">
                        <div class="text-white card-title"><?= $title; ?></div>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="text-white" for="largeInput">Nama Outlet</label>
                                <input type="text" name="nama_outlet" class="form-control form-control" id="defaultInput" placeholder="Outlet...">
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="alamat">Alamat Outlet</label>
                                <textarea class="form-control" rows="5" name="alamat_outlet"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-white" for="largeInput">No Telepon</label>
                                <input type="text" name="telp_outlet" class="form-control form-control" id="defaultInput" placeholder="No Telp..." maxlength="15">
                            </div>
                            <div class="card-action">
                                <button type="submit" name="btn-simpan" class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                                <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-danger">Batal</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>