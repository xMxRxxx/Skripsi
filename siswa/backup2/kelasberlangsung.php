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
                  <ul>
                    <li style="list-style-type: none;"><b>Jam Pelajaran :</b> Matematika</li>
                    <li style="list-style-type: none;"><b>Guru    :</b> Ucok</li>
                    <li style="list-style-type: none;"><b>Wali Kelas :</b> Tukai</li>
                    <!-- <li style="list-style-type: none;">Jam Pelajaran :</li> -->
                  </ul>
                  <h4>Link : </h4>
                  <div class="display-content">
                      <iframe class="frame-content" src="https://www.youtube.com/embed/BboMpayJomw" scrolling="no" onload="javascript:jumpScroll()"></iframe>
                  </div>
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
