<?php include 'db/koneksi.php'; ?>
<?php $query=mysqli_query($konek,"SELECT * FROM biodata");
$data=mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php echo $data['nama_sekolah']; ?></title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/custom/style.css">


		<link rel="stylesheet" href="css/bootstrap.min.css" /> 
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" /> 
    <link rel="stylesheet" href="css/custom/login_style.css" />
        <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet" /> -->
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'> -->
    <link rel="shortcut icon" href="img/<?PHP echo $data['photo']; ?>" />
</head>
    <body>
        <!-- Navbar  -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark p-md-3">
          <div class="container">
            <a class="navbar-brand" href="#"><img src="img/<?PHP echo $data['photo'] ?>" alt="" width="30" height="30" class="d-inline-block align-text-top"> SMK N 1 PASAMAN BARAT</a>
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
                  <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="http://localhost/absensi_siswa">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" style="font-weight: 600; font-size: 1.2em;" href="#">Contact</a>
                </li>
               
              </ul>
            </div>
          </div>
        </nav>
         
    <div class="box">
        <div class="form"> 

            <h3>MASUK</h3>
            <form id="loginform" method="post" action="proseslogin.php">
            <div class="inputBox">
                <input type="text" name="username" required="required"/>
                <span>Username</span>
                 <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required"/>
                <span>Password</span>
                <i></i>
            </div>

            <div class="links">
                <label style="color:#4d4d4d;">
                    <input type="radio" name="jenis_login"value="sw" />
                    Siswa
                </label>
                <label style="color:#4d4d4d;">
                    <input type="radio" name="jenis_login"value="gr" />
                    Guru
                </label>
            </div>
            <input type="submit" value="login" name="login" />
            </form>
            
        </div>
    </div>

    <br>

    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white" style="position: absolute; bottom: 0; width: 100%;">
    <!-- Grid container -->
    
    <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-white" href="#">SMK N 1 PASAMAN BARAT</a>
        </div>
     </footer>
     <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > -1) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    </body>
    <!-- <body style="background: #23242a;">
        <div id="loginbox" >
            <form id="loginform" class="form-vertical"method="post" action="proseslogin.php" style="background: #23242a;">
              <div class="control-group normal_text">
                <img src="img/<?PHP echo $data['photo']; ?>" width="50%" height="10%">
              </div>

				 <div class="control-group normal_text">  <h2>Login</h2><h3><?php echo $data['nama_sekolah']; ?></h3>
                 </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name='username' type="text" placeholder="Username" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name='password'type="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label style="color:white;">
                          <input type="radio" name="jenis_login"value="sw" />
                          Siswa</label>
                        <label style="color:white;">
                          <input type="radio" name="jenis_login"value="gr" />
                          Guru</label>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><input type="reset" name="reset" value="reset"class="flip-link btn btn-danger"></span>
                    <span class="pull-right"><input type="submit" name="login" value="Login"class="btn btn-success"></span>
                </div>
            </form>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/matrix.login.js"></script>
    </body> -->

</html>