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

              <h2><i class="icon-calendar"></i> Jurusan </h2>

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
                              <th>Kelas</th>
                              <th>Guru</th>
                              <th>Nama Jurusan</th>
                              <!-- <th colspan="10">Mata Pelajaran</th> -->
                              
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                             $query_tampilList = mysqli_query($konek, "SELECT * FROM Jurusan JOIN kelas ON jurusan.id_kelas = kelas.id_kelas JOIN biodata_guru ON jurusan.id_guru = biodata_guru.id_guru");
                             $no =1;
                             while($dataList = mysqli_fetch_array($query_tampilList)){
                             ?>
                            <tr class="gradeX">
                              <td><?php echo $no; ?></td>
                              
                              <td><?php echo $dataList['nama_kelas']; ?></td>
                              <td><?php echo $dataList['nama']; ?></td>
                              <td><?php echo $dataList['nama_jurusan']; ?></td>
                            </tr>
                            <?php $no++;} ?>
                            <!-- 
                            <tr class="gradeX">
                              <td>1</td>
                              <td>Senin</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>

                            </tr>
                            <tr class="gradeX">
                              <td>2</td>
                              <td>Selasa</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                            </tr>
                            <tr class="gradeX">
                              <td>3</td>
                              <td>Rabu</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                            </tr>
                            <tr class="gradeX">
                              <td>4</td>
                              <td>Kamis</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                            </tr>
                            <tr class="gradeX">
                              <td>5</td>
                              <td>Jum'at</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                            </tr>
                            <tr class="gradeX">
                              <td>6</td>
                              <td>Sabtu</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                              <td>MTK</td>
                            </tr>
                             -->
                           
                          </tbody>
                        </table>
                        <!-- A button to open the popup form -->
                        <input type="submit" value="Tambah Jurusan" name="tambahjurusan" style="width:25%;" onclick="openForm()"/>
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
                <form action="proses.php?kategori=jurusan" method="post" class="form-container" style="margin:10px" autocomplete="false">
                  <h1>Tambahkan Jurusan</h1>

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
                          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Jurusan</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="Nama Jurusan" name="jurusan">
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
