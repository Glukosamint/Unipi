<!doctype html>
<html lang="en">
<?php
include 'components/head.php';
?>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <?php
        include 'components/sidebar.php';
        ?>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <?php
            include 'components/navbar.php';
            ?>

            <section id="main-content">
                <section class="wrapper">
                    <!--overview start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                                <li><i class="fa fa-edit"></i><a href=""> Edit</a></li>
                            </ol>
                        </div>
                    </div>

                    <!--START SCRIPT UPDATE-->
                    <?php
                    include 'koneksi.php';

                    if (isset($_POST['edit'])) {
                        $first_nama = $_GET['nama'];
                        $nama = $_POST['nama'];
                        $npm = $_POST['npm'];
                        $jurusan = $_POST['jurusan'];
                        if (($nama == "") or ($npm == "") or ($jurusan == "")) {
                            echo "<script>
                            alert('Tolong lengkapi data yang ada!');
                            </script>";
                        } else {
                            $sql = "UPDATE saw_namapresma SET nama='$nama',npm='$npm', jurusan='$jurusan' 
                                    WHERE nama='$first_nama'";
                            $hasil = $conn->query($sql);
                            if ($hasil) {
                                echo "<script>
                                alert('berhasil di update !');
                                window.location.href='index.php'; 
                                </script>";
                            }
                        }
                    }
                    ?>
                    <!-- END SCRIPT UPDATE-->

                    <!--start inputan-->
                    <form method="POST" action="">
                        <?php
                        $nama = $_GET['nama'];
                        $sql = "SELECT * FROM saw_namapresma WHERE nama = '$nama'";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            $row = $hasil->fetch_row();
                            $nama = $row[0];
                            $npm = $row[1];
                            $jurusan = $row[2];
                        ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NPM</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="npm" value="<?= $npm ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jurusan</label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="jurusan" value="<?= $jurusan ?>">
                                        <option <?php if ($jurusan == 'Sistem Informasi') {
                                                    echo 'selected';
                                                } ?>>Sistem Informasi</option>
                                        <option <?php if ($jurusan == 'Teknologi Informasi') {
                                                    echo 'selected';
                                                } ?>>Teknologi Informasi</option>
                                        <option <?php if ($jurusan == 'Software Enggenering') {
                                                    echo 'selected';
                                                } ?>>Software Enggenering</option>
                                        <option <?php if ($jurusan == 'Manajemen') {
                                                    echo 'selected';
                                                } ?>>Manajemen</option>
                                        <option <?php if ($jurusan == 'Akuntasi') {
                                                    echo 'selected';
                                                } ?>>Akuntasi</option>
                                        <option <?php if ($kategori == 'Lainnya') {
                                                    echo 'selected';
                                                } ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-outline-danger mr-3"><a href="index.php"><i class="fa fa-close"></i> Cancel</a></button>
                                <button type="edit" name="edit" class="btn btn-outline-primary"><i class="fa fa-edit"></i> Edit</button>
                            </div>
                    </form>
                <?php } ?>
                </section>
            </section>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>