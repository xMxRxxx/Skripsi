
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
            <h2 id="xs"><i class="icon-calendar"></i> Absensi Siswa <?php echo "".$_SESSION['id_guru']; ?> </h2>

            <div id="myDiv" class="container-fluid">
              <hr>
              <form action="" method="GET">
                <div class="container">
                 <div class="row row-cols-auto">
                  <div class="col">Kelas</div>
                  <div class="col">:</div>
                  <div class="col">
                    <select name="kelas" class="form-control" id="kelas">
                      <option>PILIH KELAS</option>
                      <?php 
                      $query_tampilList = mysqli_query($konek, "SELECT * FROM jam_mengajar WHERE id_guru = ".$_SESSION['id_guru'].";");

                      while($dataList = mysqli_fetch_array($query_tampilList)){

                        $query_tampilListKelas = mysqli_query($konek, "SELECT * FROM kelas WHERE id_kelas = ".$dataList['id_kelas'].";");

                        ?>
                        <?php while($dataList1 = mysqli_fetch_array($query_tampilListKelas)){
                          echo "<option value=".$dataList1['id_kelas'].">".$dataList1['nama_kelas']."</option>";

                        } ?>

                      <?php } ?>
                    </select>
                  </div>

                  <div class="col">Lokal</div>
                  <div class="col">:</div>
                  <div class="col">
                    <select name="lokal" class="form-control" id="lokal">
                      <option value="1">PILIH Lokal</option>
                      <?php 
                      $query_tampilList = mysqli_query($konek, "SELECT * FROM jam_mengajar WHERE id_guru = ".$_SESSION['id_guru'].";");

                      while($dataList = mysqli_fetch_array($query_tampilList)){

                        $query_tampilListKelas = mysqli_query($konek, "SELECT * FROM lokal WHERE id_lokal = ".$dataList['id_lokal'].";");

                        ?>
                        <?php while($dataList1 = mysqli_fetch_array($query_tampilListKelas)){
                          echo "<option value=".$dataList1['id_lokal'].">".$dataList1['nama_lokal']."</option>";

                        } ?>

                      <?php } ?>
                    </select>
                  </div>


                  <div class="col">Jurusan</div>
                  <div class="col">:</div>
                  <div class="col">
                    <select name="jurusan" class="form-control" id="jurusan">
                      <option value="">PILIH Jurusan</option>
                      <?php 
                      $query_tampilList = mysqli_query($konek, "SELECT * FROM jam_mengajar WHERE id_guru = ".$_SESSION['id_guru'].";");

                      while($dataList = mysqli_fetch_array($query_tampilList)){

                        $query_tampilListKelas = mysqli_query($konek, "SELECT * FROM jurusan WHERE id_jurusan = ".$dataList['id_jurusan'].";");

                        ?>
                        <?php while($dataList1 = mysqli_fetch_array($query_tampilListKelas)){
                          echo "<option value=".$dataList1['id_jurusan'].">".$dataList1['nama_jurusan']."</option>";

                        } ?>

                      <?php } ?>
                    </select></div>

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
              <form action="prosses.php?kategori=absensiSiswa" method="post" class="form-container" style="margin:10px" autocomplete="false">
                <div class="row-fluid">
                  <div class="span12">
                    <div class="widget-box">
                      <div class="widget-title"> 
                        <!-- <div class="widget-content nopadding"> -->
                         <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th >No</th>
                              <th >Nama</th>
                              <th >Absensi</th>
                            </tr>

                          </thead>
                          <tbody>

                            <?php 
                            if(isset($_GET['kelas']) && isset($_GET['lokal']) && isset($_GET['jurusan']) ){


                              $get_kelas = $_GET['kelas'];
                              $get_lokal = $_GET['lokal'];
                              $get_jurusan = $_GET['jurusan'];
                              $get_tgl = $_GET['tgl_absen'];
                              $no = 1;
                              $query = "SELECT * FROM biodata_siswa WHERE id_kelas = '$get_kelas' AND id_lokal = '$get_lokal' AND id_jurusan = '$get_jurusan';";
                              $query_tampilSiswa = mysqli_query($konek, $query);
                              if(mysqli_num_rows($query_tampilSiswa) > 0){
                                foreach($query_tampilSiswa as $items){
                                  ?>
                                  <tr>
                                    <input type="hidden" name="id_siswa[]" <?php  echo "value=".$items['id_siswa']; ?>/>
                                    <input type="hidden" name="id_kelas" value="<?PHP echo $get_kelas; ?>"/>
                                    <input type="hidden" name="id_lokal" value="<?PHP echo $get_lokal; ?>"/>
                                    <input type="hidden" name="id_jurusan" value="<?PHP echo $get_jurusan ?>"/>
                                    <input type="hidden" name="tgl" value="<?PHP echo $get_tgl ?>"/>

                                    <td><?php echo "".$no++; ?></td>
                                    <td><?php echo $items['nama']; ?></td>
                                    <td>

                                      <select name="pilih_absensi[]" class="form-control" id="pilih_absensi">
                                        <option>PILIH ABSEN</option>
                                        <?php 
                                        $idSiswa = $items['id_siswa'];
                                        $kodeAbsen = array("H", "A", "S","C");
                                        $queryAbsensi = "SELECT * FROM absensi_siswa WHERE id_siswa = '$idSiswa' AND tgl = '$get_tgl' AND id_guru".$_SESSION['id_guru'].";";

                                        $showAbsensi =mysqli_query($konek,$queryAbsensi);

                                        if (mysqli_num_rows($showAbsensi)>0) { ?>
                                          <?php 
                                          while ($data=mysqli_fetch_array($showAbsensi)) {

                                            ?>
                                            <?php 
                                            foreach($kodeAbsen as $k_a){?>

                                              <option <?php echo "value=".$k_a; ?>
                                              <?php if ($data["kode_absen"] == $k_a) {
                                                echo "selected";
                                              }; ?>><?php echo $k_a; ?></option>';
                                            <?php }
                                          } ?>

                                        <?php }else{?>


                                          <option value="H">H</option>
                                          <option value="A">A</option>
                                          <option value="S">S</option>
                                          <option value="C">C</option>




                                        <?php }  ?>
                                      </select>
                                    </td>



                                  </tr>
                                  <?php 
                                }
                              }}
                              ?>
                            </tbody>
                          </table>
                          <!-- A button to open the popup form -->

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
                  <div class="row mb-3">

                    <div class="col-sm-10 offset-sm-2">

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
<script src="../js/custom/custom.js"></script>
<script >

</script>
<!--end-main-container-part-->
<?php include '../layout/footer.php'; ?>
