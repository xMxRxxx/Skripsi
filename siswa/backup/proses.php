<?php
include "../db/koneksi.php";
include 'akses.php';
//proses pengabsesnan
if(isset($_GET['kategori'])){
  if($_GET['kategori']=="absen_siswa"){
      // if($_POST['aksi']=="absen_baru"){
      //   foreach ($_POST['id_siswa'] as $id_siswa ) {
         
      //   }
      // }
      $dateNow = date('Y-m-d');
      $iduser = $_SESSION['id_user'];
      $query_absen=mysqli_query($konek,"insert into absen_siswa(tgl_absen,keterangan,id_siswa)
      values('$dateNow','h',$iduser);");
      if($query_absen)
      {
          echo '<script>alert("SUKSES")</script>';
          // Header("Location:../siswa/kelasberlangsung.php");
      } 
  }
}
 ?>
