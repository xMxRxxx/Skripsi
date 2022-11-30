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
                  <div class="col"><input type="month" name="bln_absen" class="form-control"></div>
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
                     <div class="outer">
                      <div class="inner">
                        <table class="table table-bordered" style="table-layout: fixed; 
  width: 100%;
  *margin-left: -100px;">
                          <tr>
                            <th class="hard_left" style="border-width:2px; 
                            border-color: inherit;">NO</th>
                            <th class="next_left" style="border-width:2px; 
                            border-color: inherit;">NAMA</th>
                            <?php 
                            for($x = 1; $x <= 31; $x++) { ?>

                              <th style="width: 30px;"><?php echo $x; ?></th>

                            <?php }
                            ?>
                            <th style="width: 30px;">H</th>
                            <th style="width: 30px;">I</th>
                            <th style="width: 30px;">S</th>
                            <th style="width: 30px;">A</th>
                            <th style="width: 30px;">C</th>
                          </tr>
                          <?php
                          
                          $queryAbsenKelas = mysqli_query($konek,"SELECT * FROM lokal WHERE id_walikelas = ".$_SESSION['id_guru'].";");
                          while ($data=mysqli_fetch_array($queryAbsenKelas)) {
                            $queryAbsenLokal = mysqli_query($konek,"SELECT * FROM biodata_siswa WHERE id_lokal = ".$data['id_lokal']." AND id_kelas = ".$data['id_kelas']." AND id_jurusan=".$data['id_jurusan']." ORDER BY nama ASC;");
                            $no=1;
                            while ($data1=mysqli_fetch_array($queryAbsenLokal)) {  ?>
                             <tr>
                              <td class="hard_left"><?php echo $no; ?></td>
                              <td class="next_left"><?php echo $data1['nama']; ?></td>
                              <?php $queryGetAbsen = mysqli_query($konek, "SELECT * FROM absensi_siswa WHERE id_siswa=".$data1['id_siswa']." GROUP BY tgl ORDER BY tgl,kode_absen ASC ");
                              $tgl = "";
                              while($dataAbsen = mysqli_fetch_array($queryGetAbsen)){
                                echo "<td class="."child-table".">".$dataAbsen['kode_absen']."</td>";
                                  
                              }

                              ?>
                            </tr>

                            <?php  $no++;}}
                            ?>
                               <!-- 
                              <tr>
                                <td class="hard_left">1</td>
                                <td class="next_left">Muhammad Rivan</td>
                                <td >h</td>
                              </tr> -->

                              
                              

                            </table>
                          </div>
                        </div>

                        <!-- A button to open the popup form -->
                        <input type="submit" value="Tambah Absensi" name="tambahAbsensi" style="width:25%;" onclick="openForm()"/>
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
              <div class="form-popup" id="myForm">
                <div class="m-4">
                  <form action="proses.php?kategori=guru" method="post" class="form-container" style="margin:10px" autocomplete="false">
                    <h1>Tambahkan Absensi Siswa</h1>

                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Kelas</label>
                      :
                      <div class="col-sm-8">
                        <select name="pilih_kelas" class="form-control" id="pilih_kelas">
                          <option value="">Pilih Kelas</option>
                          <?php 
                          $query_tampil=mysqli_query($konek,"SELECT * FROM kelas ORDER BY nama_kelas ASC");
                          while ($data=mysqli_fetch_array($query_tampil)) {

                            ?><?php echo '<option value="'.$data["id_kelas"].'">'.$data["nama_kelas"].'</option>';} ?>
                            
                          </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Lokal</label>
                        :
                        <div class="col-sm-8">
                          <select name="pilih_kelas" class="form-control" id="pilih_kelas">
                            <option value="">Pilih Lokal</option>
                            <?php 
                            $query_tampil=mysqli_query($konek,"SELECT * FROM lokal ORDER BY nama_lokal ASC");
                            while ($data=mysqli_fetch_array($query_tampil)) {

                              ?><?php echo '<option value="'.$data["id_lokal"].'">'.$data["nama_lokal"].'</option>';} ?>
                              
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Jurusan</label>
                          :
                          <div class="col-sm-8">
                            <select name="pilih_jurusan" class="form-control" id="pilih_jurusan">
                              <option value="">Pilih Jurusan</option>
                              <?php 
                              $query_tampil=mysqli_query($konek,"SELECT * FROM jurusan ORDER BY nama_jurusan ASC");
                              while ($data=mysqli_fetch_array($query_tampil)) {

                                ?><?php echo '<option value="'.$data["id_jurusan"].'">'.$data["nama_jurusan"].'</option>';} ?>
                                
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Siswa</label>
                            :
                            <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="NAMA" name="nama">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tgl Absensi</label>
                            :
                            <div class="col-sm-8">
                              <input type="date" id="birthday" name="tgl_absensi" class="form-control">
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            :
                            <div class="col-sm-8" style="margin-left:30px;">
                              <div class="row">
                                <div class="col-12">
                                  <div class="form-check form-check-inline" sty>
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="radioLaki" value="Laki-Laki" checked>
                                    <label class="form-check-label" for="radioMale">Hadir</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                    <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" id="radioPerempuan">
                                    <label class="form-check-label" for="radioFemale">Sakit</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                    <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" id="radioPerempuan">
                                    <label class="form-check-label" for="radioFemale">Alfa</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                    <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" id="radioPerempuan">
                                    <label class="form-check-label" for="radioFemale">Cabut</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">

                            <div class="col-sm-10 offset-sm-2">
                              <input type="batal" value="Batal" name="batal" onclick="closeForm()" style="width:25%; background: #ff3333;" />
                              <input type="submit" value="Simpan" name="simpan"style="width:25%;" />
                            </div>
                          </div>
                          
                        </form>
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
