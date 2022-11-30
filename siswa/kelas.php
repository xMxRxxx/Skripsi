<?php
include '../db/koneksi.php';
include 'akses.php';
include '../layout/header.php';
?>
<div id="content"style="margin-top:60px;">
 <div class="regular-page-area section-padding-20">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="details-content">

          <h2><i class="icon-calendar"></i> DAFTAR KELAS </h2>

          <div class="row section-padding-5">

            <div class="col-12">
              <div class="section-heading" style="display: flex; justify-content: flex-end">
                <a class="btn btn-outline-info active" style="margin: 5px; color:white; border-color: #0099cc; background: #0099cc: ; text-align: left;" href="http://localhost/absensi_siswa/siswa/kelasberlangsung.php" role="button">HADIR</a>
                <!-- <h6>[ Tidak Ada Data Kelas Online ! ]</h6> -->
              </div>
              <div class="container-fluid">
                <h3>NAMA MATA PELAJARAN</h3>
                
                  <?php 
                  date_default_timezone_set('Asia/Bangkok');
                  $timeNow = date('h:i:s');
                  $queryKelas = mysqli_query($konek,"SELECT * FROM jam_mengajar WHERE id_lokal=".$_SESSION['id_lokal']." AND id_kelas=".$_SESSION['id_kelas']." AND id_jurusan=".$_SESSION['id_jurusan']." AND hari='senin';");
                  while($kelasAktif = mysqli_fetch_array($queryKelas)){
                    echo $timeNow;
                    if($timeNow >= $kelasAktif['jam_mulai'] && $timeNow <= $kelasAktif['jam_berakhir']){?>
                      <div class="box">
                        <div class="form"> 

                          <h3>MASUK</h3>
                          

                        </div>
                      </div>
                    <?php }else{?>
                      <div class="row">
                        <div class="box-kelas">
                        <div class="form"> 
                          <br>
                          <h4>Mata Pelajaran : <?php  echo $kelasAktif['hari']; ?></h4>
                          <h4>Jam : <?php  echo $kelasAktif['jam_mulai']." - ".$kelasAktif['jam_berakhir']; ?></h4>
                        </div>
                      </div>
                      </div>
                    <?php }
                  } ?> 

                    <!-- <li style="list-style-type: none;"><b>Jam Pelajaran :</b> Matematika</li>
                    <li style="list-style-type: none;"><b>Guru    :</b> Ucok</li>
                    <li style="list-style-type: none;"><b>Wali Kelas :</b> Tukai</li> -->
                    <!-- <li style="list-style-type: none;">Jam Pelajaran :</li> -->
                  
                  <!-- <h4>Link : </h4>
                  <div class="display-content">
                      <iframe class="frame-content" src="https://www.youtube.com/embed/BboMpayJomw" scrolling="no" onload="javascript:jumpScroll()"></iframe>
                    </div> -->
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../layout/footer.php'; ?>
