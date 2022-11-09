<?php
  include '../db/koneksi.php';
  include 'akses.php';
  include '../layout/header.php';
?>
<div id="content">
   <div id="content-header">
     <div id="breadcrumb"> <a href="http://localhost/absensi_siswa/<?php echo $_SESSION['akses']; ?>/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
       <a href="http://localhost/absensi_siswa/petugas_piket/siswa" class="tip-bottom">Siswa</a> <a href="#" class="current">Absen</a></div>
     <h1>Pengambilan Absensi</h1>
   </div>
   <div class="container">
     <div class="span11">
       <div class="widget-box">
         <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
           <h5>kelas sekarang</h5>
           
         </div>
         <div class="widget-content">
          <h2>Kelas IX </h2>
          <div class="grid-container" style="display: grid;
          grid-template-columns: auto auto auto;
             padding: 10px;">
            <div class="grid-item" style="">
              <ul class="ul-kuliah" style="padding: 0;
                                      margin: 0;
                                      width: 100%;">
                <li style="list-style: none;"><i class="icon-calendar"></i> Sekolah <span>: <?php echo "" . date("d/m/y")?></span> </li>
                <li style="list-style: none;"><i class="icon-time"></i> Waktu <span>: 07:00 - 12:30 Wib</span> </li>        
                <li style="list-style: none;"><i class="icon-book"></i> Type <span>: Absensi Online</span> </li>        
                <!-- <li style="list-style: none;"><i class="icon-calendar"></i> Pertemuan Ke <span>: 2</span> </li>         -->
                <li style="list-style: none;"><i class="icon-building"></i> Wali Kelas <span>: Prof Ucok S.Kom, S.Cindu, Magic.Kom </span> </li>        
              </ul>
            </div>
            <div class="grid-item" style="
             border: 1px solid black;
             width: 50%;
             text-align: center;">
              <img src="https://i.pinimg.com/originals/e8/27/af/e827af6fc27e84d4fce3636179f27c99.png" style="height:100px;">
            </div>
            
          </div>
          
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div style="text-align:right;">
            <!-- <form method="post" action="./proses.php?kategori=absen_siswa">
              <div class="form-actions">
                    <button type="submit" class="btn btn-success">Save</button>
              </div>
            </form> -->
            <a class="btn btn-warning btn-big"  href="./proses.php?kategori=absen_siswa"
           style="background-color: green; margin: 3px; border-radius: 5px; text-align: right;">
            Hadir
            </a>
          </div>
         </div>
       </div>
     </div>
   </div>
     
 </div>
<?php include '../layout/footer.php'; ?>
