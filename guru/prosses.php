
<?php
include "../db/koneksi.php";
include 'akses.php';

if(isset($_GET['kategori'])){
  if($_GET['kategori'] == "absensiSiswa"){

    $queryCheckJam = "SELECT * FROM jam_mengajar WHERE id_guru='$_SESSION[id_guru] 'AND id_kelas='$_POST[id_kelas]' AND id_lokal='$_POST[id_lokal]' AND id_jurusan='$_POST[id_jurusan]'";
    $showCheck =mysqli_query($konek,$queryCheckJam);
    if(mysqli_num_rows($showCheck)>0){
      while ($data=mysqli_fetch_array($showCheck)) {
        $queryCheckAbsen = "SELECT * FROM absensi_siswa WHERE id_guru='$_SESSION[id_guru]'AND id_kelas='$_POST[id_kelas]' AND id_lokal='$_POST[id_lokal]' AND id_jurusan='$_POST[id_jurusan]' AND tgl='$_POST[tgl]'";
        $showCheckAbsen = mysqli_query($konek, $queryCheckAbsen);
        if(mysqli_num_rows($showCheckAbsen)>0){
              foreach (array_combine($_POST['id_siswa'], $_POST['pilih_absensi']) as $id_siswa => $kodeAbsen) {
              $queryInput = mysqli_query($konek,"UPDATE absensi_siswa SET kode_absen='$kodeAbsen' WHERE id_siswa='$id_siswa' AND tgl='$_POST[tgl]';");
          }
        }else{
          $jamBelajar = $data['jam'];
          foreach (array_combine($_POST['id_siswa'], $_POST['pilih_absensi']) as $id_siswa => $kodeAbsen) {
              $queryInput = mysqli_query($konek,"INSERT INTO absensi_siswa(id_kelas, id_lokal,id_jurusan,id_guru, id_siswa,jam_absen, kode_absen,tgl)
              values('$_POST[id_kelas]','$_POST[id_lokal]','$_POST[id_jurusan]','$_SESSION[id_guru]','$id_siswa','$jamBelajar','$kodeAbsen','$_POST[tgl]');");
          }
          
        }
        
      }

    }

    
    // foreach(array_combine($_POST['id_siswa'], $_POST['pilih_absensi']) as $id_siswa => $kode_absen){
    //   echo "AA";
    //   $queryInput = mysqli_query($konek,"INSERT INTO absensi_siswa(id_kelas, id_lokal,id_jurusan,id_guru, id_siswa,jam_absen, kode_absen,tgl)
    //       values('$_POST[id_kelas]','$_POST[id_lokal]','$_POST[id_jurusan]','$_SESSION[id_guru]','$id_siswa','1','$kode_absen,'sad');");
      
    // }
    Header("Location:../guru/isiAbsensi.php");
        // WHERE id_kelas='$_POST[id_kelas]' id_kelas='$_POST[id_lokal]' id_jurusan=$_POST[id_jurusan]  id_guru='$_SESSION[id_guru]' id_siswa='$id_siswa'
    // $idSiswa = $items['id_siswa'];
    // $kodeAbsen = array("H", "A", "S","C");
    // $queryAbsensi = "SELECT 'kode_absen' FROM absensi_siswa WHERE id_siswa = '$idSiswa';";
    // $showAbsensi =mysqli_query($konek,$queryAbsensi);
    // if (mysqli_num_rows($showAbsensi)>0) {
      
    // }else{

    //   }
      
  }
  
  // echo $_POST['id_sis'];
   // Header("Location:../guru/");

    
    
  
  // if($_GET['kategori'] == "absensiSiswa"){
  //   $queryJam = mysqli_query($konek, "SELECT * FROM jam_mengajar WHERE id_kelas='$_POST[pilih_kelas]' id_kelas='$_POST[pilih_lokal]' id_jurusan=$_POST[pilih_jurusan]  id_guru='$_SESSION[id_guru]");
  //   if(mysqli_num_rows($queryJam) == 1){
  //     while($jamNgajar = mysqli_fetch_array($queryJam)){
  //       // $jamNgajar['jam'];
  //       $query_daftar=mysqli_query($konek,"INSERT INTO absensi_siswa (id_kelas,id_lokal, id_jurusan,id_guru,id_siswa,jam_absen,kode_absen,tgl) VALUES
  //       ('$_POST[pilih_kelas]','$_POST[pilih_lokal]','$_POST[id_jurusan]','$jam_mengajar['jam']','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[status]', '$_POST[jabatan]' , '$_POST[telepon]');");
  //         if($query_daftar){
  //           // to get username 
  //           // $str_tgl = str_replace("-","",$_POST[tgl_lahir]);
  //           // $get_username = substr( $_POST[thn_pendaftaran], -2) . substr($str_tgl,2);
  //           // to get password
  //           $str_nama = substr($_POST[nama],1,2);
  //           $get_password = generateUsername($str_nama);
  //           $query_daftar1 =mysqli_query($konek,"INSERT INTO user (username_user,password_user, nama_user,akses_user) VALUES ('$_POST[nip]','$get_password','$_POST[nama]','guru')");
  //           if($query_daftar1){
  //             Header("Location:../admin/tambahGuru.php");
  //           }

  //         }else{
  //           Header("Location:../admin/index.php");
  //         }
  //     }
  //   }
    
  // }
}
?>

