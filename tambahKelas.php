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

              <h2><i class="icon-calendar"></i> GURU </h2>

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
                              <th>Nip</th>
                              <th>Nuptk</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Tgl Lahir</th>
                              <th>Status</th>
                              <th>Jabatan</th>
                              <th>Telepon</th>
                              <!-- <th colspan="10">Mata Pelajaran</th> -->
                              
                          </tr>
                          </thead>
                          <tbody>
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
                        <input type="submit" value="Tambah Guru" name="tambahGuru" style="width:25%;" onclick="openForm()"/>
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
                  <h1>Tambahkan guru</h1>

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
                          <label class="col-sm-2 col-form-label">Nip</label>
                          :
                          <div class="col-sm-8">
                              <input type="number" class="form-control"  placeholder="NIP" name="nip">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Nuptk</label>
                          :
                          <div class="col-sm-8">
                              <input type="number" class="form-control"  placeholder="NUPTK" name="nuptk">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="NAMA" name="nama">
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
                                      <label class="form-check-label" for="radioMale">Laki-Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                      <input type="radio" class="form-check-input" value="Perempuan" name="jenis_kelamin" id="radioPerempuan">
                                      <label class="form-check-label" for="radioFemale">Perempuan</label>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="col-sm-8">
                              <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                          </div> -->
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Tgl Lahir</label>
                          :
                          <div class="col-sm-8">
                            <input type="date" id="birthday" name="tgl_lahir" class="form-control">
                              <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password" required> -->
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
                          <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="STATUS" name="status">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
                          :
                          <div class="col-sm-8">
                              <input type="text" class="form-control"  placeholder="JABATAN" name="jabatan">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Telepon</label>
                          :
                          <div class="col-sm-8">
                              <input type="number" class="form-control"  placeholder="TELEPON" name="telepon">
                          </div>
                      </div>
                      <!-- <div class="row mb-3">
                          <div class="col-sm-10 offset-sm-2">
                              <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="checkRemember">
                                      <label class="form-check-label" for="checkRemember">Remember me</label>
                              </div>
                          </div>
                      </div> -->
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
