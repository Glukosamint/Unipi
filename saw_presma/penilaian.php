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
                <li><i class="fa fa-list-ol"></i><a href="penilaian.php"> Penilaian</a></li>
              </ol>
            </div>
          </div>

          <!--START SCRIPT INSERT-->
          <?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $ipk = $_POST['ipk'];
            $publicspeaking = substr($_POST['publicspeaking'], 1, 1);
            $keaktifan = substr($_POST['keaktifan'], 1, 1);
            $intelektual = substr($_POST['intelektual'], 1, 1);
            if ($ipk == "" || $publicspeaking == "" || $keaktifan == "" || $intelektual == "") {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT*FROM saw_penilaian WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>
                alert('Aplikasi $nama sudah ada!');
                </script>";
              } else {
                //insert name
                $sql = "INSERT INTO saw_penilaian(
                nama,ipk,publicspeaking,keaktifan,intelektual)
                values ('" . $nama . "',
                '" . $ipk . "',
                '" . $publicspeaking . "',
                '" . $keaktifan . "',
                '" . $intelektual . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Penilaian Berhasil di Tambahkan!');
                </script>";
              }
            }
          }
          ?>
          <!-- END SCRIPT INSERT-->

          <!--start inputan-->
          <form method="POST" action="">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Alternatif</label>
              <div class="col-sm-4">
                <select class="form-control" name="nama">
                  <?php
                  //load nama
                  $sql = "SELECT * FROM saw_namapresma";
                  $hasil = $conn->query($sql);
                  $rows = $hasil->num_rows;
                  if ($rows > 0) {
                    while ($row = mysqli_fetch_array($hasil)) :; {
                      } ?> <option><?php echo $row[0]; ?></option>
                  <?php endwhile;
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">IPK</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="ipk" id="ipk">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Public Speaking</label>
              <div class="col-sm-4">
                <select class=" form-control" name="publicspeaking">
                  <option>(1) Sangat Rendah</option>
                  <option>(2) Rendah</option>
                  <option>(3) Sedang</option>
                  <option>(4) Bagus</option>
                  <option>(5) Sangat Bagus</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Keaktifan</label>
              <div class="col-sm-4">
                <select class=" form-control" name="keaktifan">
                  <option>(1) Sangat Tidak Aktif</option>
                  <option>(2) Tidak Aktif</option>
                  <option>(3) Sedang</option>
                  <option>(4) Aktif</option>
                  <option>(5) Sangat Aktif</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">intelektual</label>
              <div class="col-sm-4">
                <select class=" form-control" name="intelektual">
                  <option>(1) Tidak Sangat Intelektual</option>
                  <option>(2) Tidak Intelektual</option>
                  <option>(3) Sedang</option>
                  <option>(4) Intelektual</option>
                  <option>(5) Sangat Intelektual</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <button type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-save"></i> Submit</button>
            </div>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th><i class="fa fa-arrow-down"></i> No</th>
                <th><i class="fa fa-arrow-down"></i> Alternatif</th>
                <th><i class="fa fa-arrow-down"></i> IPK</th>
                <th><i class="fa fa-arrow-down"></i> Public Speaking</th>
                <th><i class="fa fa-arrow-down"></i> Keaktifan</th>
                <th><i class="fa fa-arrow-down"></i> Intelektual</th>
                <th><i class="fa fa-cogs"></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $b = 0;
              $sql = "SELECT*FROM saw_penilaian ORDER BY nama ASC";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                while ($row = $hasil->fetch_row()) {
              ?>
                  <tr>
                    <td align="center"><?php echo $b = $b + 1; ?></td>
                    <td><?= $row[0] ?></td>
                    <td align="center"><?= $row[1] ?></td>
                    <td align="center"><?= $row[2] ?></td>
                    <td align="center"><?= $row[3] ?></td>
                    <td align="center"><?= $row[4] ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="penilaian_hapus.php?nama=<?= $row[0] ?>">
                          <i class="fa fa-close"></i></a>
                      </div>
                    </td>
                  </tr>
              <?php }
              } else {
                echo "<tr>
                    <td>Data Tidak Ada</td>
                <tr>";
              } ?>
            </tbody>
          </table>
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