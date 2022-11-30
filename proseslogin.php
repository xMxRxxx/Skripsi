<?php 

	include "db/koneksi.php";
	if (isset($_POST['login'])) {

		// this code...
		if($_POST["jenis_login"] == "gr"){

			$query = mysqli_query($konek,"select * from user where username_user = '$_POST[username]' && password_user = '$_POST[password]'");
			if(mysqli_num_rows($query) == 1){
				while ($user = mysqli_fetch_array($query)) {
					// this code bro...
					$_SESSION['id_user']  = $user['id_user'];
					$_SESSION['username'] = $user['username_user'];
					$_SESSION['password'] = $user['password_user'];
					$_SESSION['akses']	  =	$user['akses_user'];

					$query1 = mysqli_query($konek,"select * from biodata_guru where nip = '$_POST[username]'");
					if(mysqli_num_rows($query1)==1){

						while($guru = mysqli_fetch_array($query1)){
							$_SESSION['id_guru'] = $guru['id_guru'];
							if($_SESSION['akses'] == "guru"){
								Header("Location:guru");
							}else if($_SESSION['akses'] == "wali kelas"){
								Header("Location:wali_kelas");
							}
						}
					}else{
						if($_SESSION['akses'] == 'admin'){
							Header("Location:admin");
						}
					}

				}
				// if($_SESSION['akses'] == "admin"){
				// 	Header("Location:admin");
				// }else if($_SESSION['akses'] == "guru"){
				// 	Header("Location:guru");
				// }else{
				// 	Header("Location:../absensi_siswa/login.php");
				// }
			}
		}else if($_POST["jenis_login"] == "sw"){

			$query = mysqli_query($konek,"select * from user where username_user = '$_POST[username]' && password_user = '$_POST[password]' && akses_user = 'siswa'");
			if(mysqli_num_rows($query) == 1){
				while ($user = mysqli_fetch_array($query)) {
					// this code bro...
					$_SESSION['id_user']  = $user['id_user'];
					$_SESSION['username'] = $user['username_user'];
					$_SESSION['password'] = $user['password_user'];
					$_SESSION['akses']	  =	$user['akses_user'];

					$query1 = mysqli_query($konek,"select * from biodata_siswa where telepon = '$_POST[username]'");
					if(mysqli_num_rows($query1)==1){
						while($siswa = mysqli_fetch_array($query1)){
							$_SESSION['id_siswa'] = $siswa['id_siswa'];
							$_SESSION['id_kelas'] = $siswa['id_kelas'];
							$_SESSION['id_lokal'] = $siswa['id_lokal'];
							$_SESSION['id_jurusan'] = $siswa['id_jurusan'];

							if($_SESSION['akses'] == "siswa"){
								Header("Location:siswa");
							}
						}
					}else{
						if($_SESSION['akses'] == 'admin'){
							Header("Location:./");
						}
					}

				}
				// if($_SESSION['akses'] == "admin"){
				// 	Header("Location:admin");
				// }else if($_SESSION['akses'] == "guru"){
				// 	Header("Location:guru");
				// }else{
				// 	Header("Location:../absensi_siswa/login.php");
				// }
			}
		}
	}else {
	Header("Location:../absensi_siswa/index.php");
}

 ?>