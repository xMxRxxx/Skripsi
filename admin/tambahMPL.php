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

              <h2><i class="icon-calendar"></i> Mata Pelajaran </h2>

              <div id="myDiv" class="container-fluid">
                <hr>
                <div class="row-fluid">
                  <div class="span12">
                    <div class="widget-box">
                      <div class="widget-title"> 
                        <!-- <div class="widget-content nopadding"> -->
                       <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>No</th>

                              <th>Nama Mata Pelajaran</th>
                              <th>Kelas</th>
                              <th>Jurusan</th>
                              <th>Lokal</th>
                              <th>Guru</th>
                              <!-- <th colspan="10">Mata Pelajaran</th> -->
                              
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                             $query_tampilList = mysqli_query($konek, "SELECT * FROM mpl JOIN kelas ON mpl.id_kelas = kelas.id_kelas JOIN jurusan ON mpl.id_jurusan = jurusan.id_jurusan JOIN lokal ON mpl.id_lokal = lokal.id_lokal JOIN biodata_guru ON mpl.id_guru = biodata_guru.id_guru");
                             $no =1;
                             while($dataList = mysqli_fetch_array($query_tampilList)){
                             ?>
                            <tr class="gradeX">
                              <td><?php echo $no; ?></td>
                              <td><?php echo $dataList['nama_mpl']; ?></td>
                              <td><?php echo $dataList['nama_kelas']; ?></td>
                              <td><?php echo $dataList['nama_jurusan']; ?></td>
                              <td><?php echo $dataList['nama_lokal']; ?></td>
                              <td><?php echo $dataList['nama']; ?></td>
                            </tr>
                            <?php $no++;} ?>
                           
                          </tbody>
                        </table>
                        <!-- A button to open the popup form -->
                        <input type="submit" value="Tambah MPL" name="tambahMPL" style="width:25%;" onclick="openForm()"/>
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
                <form action="proses.php?kategori=mpl" method="post" class="form-container" style="margin:10px" autocomplete="false">
                  <h1>Tambahkan Mata Pelajaran</h1>

                  <!-- <div class="inputBox">
                      <input type="text" name="username" required="required"/>
                      <span>Username</span>
                       <i></i>
                  </div>
                  <div class="inputBox">
                      <input type="password" name="password" required="required"/>
                      <span>Password</span>
                      <i></i>
                  </div> -->
                  
                  <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Kelas</label>
                          :
                          <div class="col-sm-8">
                              <select name="pilih_kelas" class="form-control" id="select_box">
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
                                <option value="">Pilih lokal</option>
                                <?php 
                                  $query_tampil=mysqli_query($konek,"SELECT * FROM lokal ORDER BY nama_lokal ASC");
                                while ($data=mysqli_fetch_array($query_tampil)) {
                  
                                ?><?php echo '<option value="'.$data["id_lokal"].'">'.$data["nama_lokal"].'</option>';} ?>
                                 
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Guru</label>
                          :
                          <div class="col-sm-8">
                              <select name="pilih_guru" class="form-control" id="select_box">
                                <option value="">Pilih Guru</option>
                                <?php 
                                  $query_tampil=mysqli_query($konek,"SELECT * FROM biodata_guru ORDER BY nama ASC");
                                while ($data=mysqli_fetch_array($query_tampil)) {
                  
                                ?><?php echo '<option value="'.$data["id_guru"].'">'.$data["nama"].'</option>';} ?>
                                 
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="MATA PELAJARAN" name="mpl">
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
