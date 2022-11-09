<!-- <?php include 'http://localhost/absensi_siswa/db/koneksi.php'; ?> -->
<?php $query=mysqli_query($konek,"SELECT * FROM biodata");
$data=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php echo $data['nama_sekolah']; ?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="http://localhost/absensi_siswa/css/custom/style.css">


    <link rel="stylesheet" href="http://localhost/absensi_siswa/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="http://localhost/absensi_siswa/css/bootstrap-responsive.min.css" /> 
    
        <!-- <link rel="stylesheet" href="css/matrix-login.css" /> -->
        <link href="http://localhost/absensi_siswa/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->
    <link rel="shortcut icon" href="http://localhost/absensi_siswa/img/<?PHP echo $data['photo']; ?>" />
</head>
  <body>
        <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="http://localhost/absensi_siswa/img/<?PHP echo $data['photo'] ?>" alt="" width="30" height="30" class="d-inline-block align-text-top"> SMK N 1 PASAMAN BARAT</a>
        <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="http://localhost/absensi_siswa/siswa/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="color: white; font-weight: 600; font-size: 1.2em;">
                
                <span class="text"> <?php if ($_SESSION['akses']=='siswa') {
                    // code...
                    echo "Kelas";
                } ?></span></a>
                <div class="dropdown-menu">
                  <a href="http://localhost/absensi_siswa/siswa/kelasberlangsung.php" class="dropdown-item">Kelas</a>
                  <a href="http://localhost/absensi_siswa/siswa/absensi.php" class="dropdown-item">Absensi</a>
                  <a href="http://localhost/absensi_siswa/siswa/mpl.php" class="dropdown-item">Jadwal</a>
                <!-- <div class="dropdown-divider"></div>
                <a href="#"class="dropdown-item">Logout</a> -->
                </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="#">Kelas</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="#">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="#">Pustaka</a>
            </li>    
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"style="color: white;font-weight: 600; font-size: 1.2em;">
                <i class="icon icon-user"></i>
                <span class="text"><b> <?php if ($_SESSION['akses']=='siswa') {
                    // code...
                    echo $_SESSION['nama_siswa'];
                } ?></b></span><b class="caret"></b></a>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Inbox</a>
                  <a href="#" class="dropdown-item">Drafts</a>
                  <a href="#" class="dropdown-item">Sent Items</a>
                <div class="dropdown-divider"></div>
                <a href="#"class="dropdown-item">Logout</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="http://localhost/absensi_siswa/js/bootstrap.bundle.min.js"></script> 
  </body>
    

</html>