<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nama_lengkap'])) {
          //query SQL
          $nama_lengkap_upd = $_GET['nama_lengkap'];
          $query = "SELECT * FROM datadiri WHERE nama_lengkap = '$nama_lengkap_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $universitas = $_POST['universitas'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
      //query SQL
      $sql = "UPDATE datadiri SET nama_lengkap='$nama', status='$status', universitas='$universitas', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email' WHERE nama_lengkap='$nama'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Web Profile</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <h2 style="margin: 30px 0 30px 0;">Update Data Mahasiswa</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $data['nama_lengkap'];  ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" placeholder="Status" name="status" value="<?php echo $data['status'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Universitas</label>
              <input type="text" class="form-control" placeholder="Universitas" name="universitas" value="<?php echo $data['universitas'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="custom-select" name="jenis_kelamin" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="Laki-Laki" <?php echo $data['jenis_kelamin']=='Laki-Laki' ? "selected" : "" ?>>Laki-Laki</option>
                <option value="Perempuan" <?php echo $data['jenis_kelamin']=='Perempuan' ? "selected" : "" ?>>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea class="form-control" name="alamat" required="required"><?php echo $data['alamat'];  ?></textarea>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $data['email'];  ?>" required="required">
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>