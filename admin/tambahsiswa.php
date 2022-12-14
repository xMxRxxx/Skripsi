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

              <h2><i class="icon-calendar"></i> SISWA </h2>

              <div id="myDiv" class="container-fluid">
                <hr>
                <div class="row-fluid">
                  <div class="span12">
                    <div class="widget-box">
                      <div class="widget-title">
                       <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Tgl Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th>Alamat</th>
                              <th>Telepon</th>
                              <th>Kelas</th>
                              <th>Jurusan</th>
                              <th>Lokal</th>
                              <th>Wali Kelas</th>
                              
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                             $query_tampilList = mysqli_query($konek, "SELECT * FROM biodata_siswa JOIN kelas ON biodata_siswa.id_kelas=kelas.id_kelas JOIN jurusan ON biodata_siswa.id_jurusan=jurusan.id_jurusan JOIN lokal ON biodata_siswa.id_lokal=lokal.id_lokal");
                             $no =1;
                             while($dataList = mysqli_fetch_array($query_tampilList)){
                             ?>
                            <tr class="gradeX">
                              <td><?php echo $no; ?></td>
                              <td><?php echo $dataList['nama']; ?></td>
                              <td><?php echo $dataList['tgl_lahir']; ?></td>
                              
                              <td><?php echo $dataList['jenis_kelamin']; ?></td>
                              <td><?php echo $dataList['alamat']; ?></td>
                              <td><?php echo $dataList['telepon']; ?></td>
                              <td><?php echo $dataList['nama_kelas']; ?></td>
                              <td><?php echo $dataList['nama_jurusan']; ?></td>
                              <td><?php echo $dataList['id_lokal'];?></td>
                              <td>
                                <?php
                                
                                $query_tampilList1 = mysqli_query($konek, "SELECT * FROM lokal JOIN biodata_guru ON lokal.id_lokal = biodata_guru.id_guru WHERE id_lokal=".$dataList['id_lokal']);
                             
                             while($dataList1 = mysqli_fetch_array($query_tampilList1)){?> <?php echo $dataList1['nama'];} ?></td>

                            </tr>
                            <?php $no++;} ?>
                          </tbody>
                        </table>
                        <!-- A button to open the popup form -->
                        <input type="submit" value="Tambah Siswa" name="tambahGuru" style="width:25%;" onclick="openForm()"/>
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
                <form action="proses.php?kategori=siswa" method="post" class="form-container" style="margin:10px" autocomplete="false">
                  <h1>Tambahkan Siswa</h1>
                  <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nama</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="NAMA" name="nama">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Tgl Lahir</label>
                          :
                          <div class="col-sm-8">
                            <input type="date" id="birthday" name="tgl_lahir" class="form-control">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                          :
                          <div class="col-sm-8" style="margin-left:30px;">
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-check form-check-inline" sty>
                                      <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" id="radioLaki" checked>
                                      <label class="form-check-label" for="radioMale">Laki-Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                      <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" id="radioPerempuan">
                                      <label class="form-check-label" for="radioFemale">Perempuan</label>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="ALAMAT" name="alamat">
                          </div>
                      </div>
                       <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
                          :
                          <div class="col-sm-8">
                              <input type="number" class="form-control"  placeholder="TELEPON" name="telepon">
                          </div>
                      </div>
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
                          <label class="col-sm-2 col-form-label">Lokal</label>
                          :
                          <div class="col-sm-8">
                              <select name="pilih_lokal" class="form-control" id="pilih_lokal">
                                <option value="">Pilih Lokal</option>
                                <?php 
                                  $query_tampil=mysqli_query($konek,"SELECT * FROM lokal ORDER BY nama_lokal ASC");
                                while ($data=mysqli_fetch_array($query_tampil)) {
                  
                                ?><?php echo '<option value="'.$data["id_lokal"].'">'.$data["nama_lokal"].'</option>';} ?>
                                 
                              </select>
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
<!--end-main-container-part-->
<?php include '../layout/footer.php'; ?>
