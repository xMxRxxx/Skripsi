<?php
  include '../db/koneksi.php';
  include 'akses.php';
  include '../layout/header.php';
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><a href="http://localhost/absensi_siswa/<?php echo $_SESSION['akses']; ?>/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="http://localhost/absensi_siswa/<?php echo $_SESSION['akses']; ?>/" class="current">Dashboard</a></div>
  </div>
  <div class="container-fluid" style="height: 300px; background-image: url('../img/gallery/albedo.gif'); background-repeat:no-repeat;background-size: 100% 100%;background-position: center; ">
    <div style="text-align: center;">
      <h1 style="color:white;">SMK 1 PASAMAN BARAT</h1>
      <h3 style="color:white;">SLOGAN SMK 1 PASAMAN</h3>
      <a class="btn btn-warning btn-big"  href="http://localhost/absensi_siswa/siswa/kelasberlangsung.php/">
        MASUK KELAS
      </a>
    </div>
  </div>
  <!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span11">
          <a href="siswa">
            <i class="icon-group"></i> <strong>
              <?php $query_soswa=mysqli_query($konek,"SELECT count(id_siswa) FROM siswa");
              $data_soswa=mysqli_fetch_array($query_soswa);
              echo $data_soswa[0];
               ?>
            </strong> <small>Total Siswa</small>
          </a>
        </li>
        <li class="bg_lg span11">
          <a href="kelas">
            <i class="icon-sitemap"></i> <strong>
              <?php $query_kolas=mysqli_query($konek,"SELECT count(id_kelas) FROM kelas");
              $data_kolas=mysqli_fetch_array($query_kolas);
              echo $data_kolas[0];
               ?>
            </strong> <small>Total Kelas</small>
          </a>
        </li>
        <li class="bg_ly span11">
          <a href="guru">
            <i class="icon-group"></i> <strong>
              <?php $query_goru=mysqli_query($konek,"SELECT count(id_guru) FROM guru");
              $data_goru=mysqli_fetch_array($query_goru);
              echo $data_goru[0];
               ?>
            </strong> <small>Total Guru</small>
          </a>
        </li>
        <li class="bg_lo span11">
          <a href="wali">
            <i class="icon-user"></i> <strong>
              <?php $query_woli=mysqli_query($konek,"SELECT count(id_wali) FROM wali_kelas");
              $data_woli=mysqli_fetch_array($query_woli);
              echo $data_woli[0];
               ?>
            </strong> <small>Total Wali Kelas</small>
          </a>
         </li>
        <li class="bg_ls span11">
          <a href="admin">
            <i class="icon-user"></i> <strong>
              <?php $query_usor=mysqli_query($konek,"SELECT count(id_user) FROM user");
              $data_usor=mysqli_fetch_array($query_usor);
              echo $data_usor[0];
               ?>
            </strong> <small>Total User</small>
          </a>
        </li>
      </ul>
    </div>
<!--End-Action boxes-->
  
</div>
<?php include '../layout/footer.php'; ?>
