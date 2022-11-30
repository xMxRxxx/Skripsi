<?php
include '../db/koneksi.php';
include 'akses.php';
include '../layout/header.php';
?>

<div id="content" style="margin-top:60px;">
  <div class="regular-page-area section-padding-20">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="details-content">
            <h2 id="xs"><i class="icon-calendar"></i> Absensi Kelas </h2>
            <div id="myDiv" class="container-fluid">
              <hr>
              <form action="" method="GET">
                <div class="container">
                 <div class="row row-cols-auto">


                  <div class="col">Tanggal</div>
                  <div class="col">:</div>
                  <div class="col"><input type="date" name="tgl_absen" class="form-control"></div>
                  <div class="col">
                    <button style="padding-top: calc(0.375rem + 1px);
                    padding-bottom: calc(0.375rem + 1px);
                    margin-bottom: 0; width:100%; border-color:white;" type="submit">Cari</button>
                  </div>
                </div>
              </div>
            </form>
            <br>
            <div class="row-fluid">
              <div class="span12">
                <div class="widget-box">
                  <div class="widget-title"> 
                    <!-- <div class="widget-content nopadding"> -->
                     <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:10px;">No</th>
                          <th style="width:50px;">Nama</th>
                          <th style="width:10px;">1</th>
                          <th style="width:10px;">2</th>
                          <th style="width:10px;">3</th>
                          <th style="width:10px;">4</th>
                          <!-- <th style="width:20px;">Hadir</th>
                          <th style="width:20px;">Alfa</th>
                          <th style="width:20px;">Izin</th>
                          <th style="width:20px;">Cabut</th>
                          <th style="width:20px;">Sakit</th> -->

                        </tr>

                      </thead>
                      <tbody>

                        <?php
                        if(isset($_GET['tgl_absen'])){
                        $tgl = $_GET['tgl_absen'];
                        $queryAbsenKelas = mysqli_query($konek,"SELECT * FROM lokal WHERE id_walikelas = ".$_SESSION['id_guru'].";");
                        while ($data=mysqli_fetch_array($queryAbsenKelas)) {
                          $queryAbsenLokal = mysqli_query($konek,"SELECT * FROM biodata_siswa WHERE id_lokal = ".$data['id_lokal']." AND id_kelas = ".$data['id_kelas']." AND id_jurusan=".$data['id_jurusan']." ORDER BY nama ASC;");
                          $no=1;
                          while ($data1=mysqli_fetch_array($queryAbsenLokal)) {?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $data1['nama'];?></td>
                              <?php
                              $queryGetAbsen = mysqli_query($konek, "SELECT * FROM absensi_siswa WHERE id_siswa=".$data1['id_siswa']." AND tgl='".$tgl."';");
                               while ($data2=mysqli_fetch_array($queryGetAbsen)) {?>
                                <td><div class="myDIV"><?php echo $data2['kode_absen']; ?></div>
                                 <div class="form-popup-ket" id="Form-ket">Keterangan : <br> <?php echo $data2['keterangan']; ?></div>
                                </td>

                               <?php }
                               ?>
                            </tr>

                            <?php
                            $no++;
                          }
                        }
                      }
                        ?>


                        </tbody>
                      </table>

                      <!-- A button to open the popup form -->
                      <!-- <input type="submit" value="Rekap Absensi" name="rekapAbsensi" style="width:25%;" onclick="openForm()"/> -->
                      <!-- <button class="open-button" onclick="openForm()">Tambah Guru</button> -->
                      <!-- </div> -->
                      

                    </div>
                    <div class="widget-content">
                      <div id="placeholder"></div>
                      <p id="choices"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <script src="../js/custom/custom.js"></script>
    <script >

    </script>
    <!--end-main-container-part-->
    <?php include '../layout/footer.php'; ?>
