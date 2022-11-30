
<?php
include "../db/koneksi.php";
include 'akses.php';


function generateUsername($fullName)
{
    $removedMultispace = preg_replace('/\s+/', ' ', $fullName);

    $sanitized = preg_replace('/[^A-Za-z0-9\ ]/', '', $removedMultispace);

    $lowercased = strtolower($sanitized);
 
    $splitted = explode(" ", $lowercased);

    if (count($splitted) == 1) {
        $Pasw = substr($splitted[0], 0, rand(2, 5)) . rand(111111, 999999);
    } else {
        $Pasw = $splitted[0] . substr($splitted[1], 0, rand(0, 3)) . rand(11111, 99999);
    }

    return $Pasw;
}


if(isset($_GET['kategori'])){
  if($_GET['kategori'] == "guru"){

    $query_daftar=mysqli_query($konek,"INSERT INTO biodata_guru (nip,nuptk,nama, jenis_kelamin,tgl_lahir, alamat, status, jabatan, telepon) VALUES
    ('$_POST[nip]','$_POST[nuptk]','$_POST[nama]','$_POST[jenis_kelamin]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[status]', '$_POST[jabatan]' , '$_POST[telepon]');");
      if($query_daftar){
        $str_nama = substr($_POST[nama],1,2);
        $get_password = generateUsername($str_nama);
        $query_daftar1 =mysqli_query($konek,"INSERT INTO user (username_user,password_user, nama_user,akses_user) VALUES ('$_POST[nip]','$get_password','$_POST[nama]','guru')");
        if($query_daftar1){
          Header("Location:../admin/tambahGuru.php");
        }

      }else{
        Header("Location:../admin/index.php");
      }
  }else if($_GET['kategori'] == "siswa"){

    $query_daftar=mysqli_query($konek,"INSERT INTO biodata_siswa (nama,tgl_lahir, jenis_kelamin, alamat, telepon, id_kelas, id_jurusan, id_lokal) VALUES
    ('$_POST[nama]','$_POST[tgl_lahir]','$_POST[jenis_kelamin]','$_POST[alamat]', '$_POST[telepon]','$_POST[pilih_kelas]','$_POST[pilih_jurusan]','$_POST[pilih_lokal]');");
    if($query_daftar){
        $str_nama = substr($_POST[nama],1,2);
        $get_password = generateUsername($str_nama);
        $query_daftar1 =mysqli_query($konek,"INSERT INTO user (username_user,password_user, nama_user,akses_user) VALUES ('$_POST[telepon]','$get_password','$_POST[nama]','siswa')");
        if($query_daftar1){
          Header("Location:../admin/tambahSiswa.php");
        }

      }else{
        Header("Location:../admin/index.php");
      }
    // if($query_daftar){
    //    Header("Location:../admin/tambahSiswa.php");
        
    //   }else{
    //     Header("Location:../admin/tambahSiswa.php");
    //   }
  }else if($_GET['kategori'] == "mpl"){

    $query_daftar=mysqli_query($konek,"INSERT INTO mpl (id_kelas, id_jurusan, id_lokal,id_guru,nama_mpl) VALUES
    ('$_POST[pilih_kelas]','$_POST[pilih_jurusan]','$_POST[pilih_lokal]','$_POST[pilih_guru]','$_POST[mpl]');");
      if($query_daftar){
       
        Header("Location:../admin/tambahMPL.php");
        
      }else{
        Header("Location:../admin/tambahMPL.php");
      }
  }else if($_GET['kategori'] == "lokal"){
    $query_daftar=mysqli_query($konek,"INSERT INTO lokal (id_kelas,id_jurusan,id_walikelas,nama_lokal) VALUES
    ('$_POST[pilih_kelas]','$_POST[pilih_jurusan]','$_POST[pilih_guru]','$_POST[lokal]');");
      if($query_daftar){
       
        Header("Location:../admin/tambahLokal.php");
        
      }else{
        Header("Location:../admin/tambahLokal.php");
      }
  }else if($_GET['kategori'] == "jurusan"){
    $query_daftar=mysqli_query($konek,"INSERT INTO jurusan (id_kelas,id_guru,nama_jurusan) VALUES
    ('$_POST[pilih_kelas]','$_POST[pilih_guru]','$_POST[jurusan]');");
      if($query_daftar){
       
        Header("Location:../admin/tambahJurusan.php");
        
      }else{
        Header("Location:../admin/tambahJurusan.php");
      }
  }else if($_GET['kategori'] == "jamMengajar"){
    $query_daftar=mysqli_query($konek,"INSERT INTO jam_mengajar (id_kelas,id_lokal,id_jurusan,id_guru,id_mpl,jam) VALUES
    ('$_POST[pilih_kelas]', '$_POST[pilih_lokal]', '$_POST[pilih_jurusan]', '$_POST[pilih_guru]', '$_POST[pilih_mpl]', '$_POST[jamMengajar]');");
      if($query_daftar){
       
        Header("Location:../admin/tambah_jamMengajar.php");
        
      }else{
        Header("Location:../admin/index.php");
      }
  }
}
?>

