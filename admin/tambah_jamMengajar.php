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
              <h2 id="xs"><i class="icon-calendar"></i> Jam Mengajar </h2>
              <div id="myDiv" class="container-fluid">
                <hr>
                <div class="m-4">
                <form action="proses.php?kategori=jamMengajar" method="post" class="form-container" style="margin:10px" autocomplete="false">
                  <h1>Tambahkan Jam Mengajar</h1>
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
                          <label class="col-sm-2 col-form-label">Nama Guru</label>
                          :
                          <div class="col-sm-8">
                              <select name="pilih_guru" class="form-control" id="pilih_guru">
                                <option value="">Pilih Guru</option>
                                <?php 
                                  $query_tampil=mysqli_query($konek,"SELECT * FROM biodata_guru ORDER BY nama ASC");
                                while ($data=mysqli_fetch_array($query_tampil)) {
                  
                                ?><?php echo '<option value="'.$data["id_guru"].'">'.$data["nama"].'</option>';} ?>
                                 
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
                          :
                          <div class="col-sm-8">
                              <select name="pilih_mpl" class="form-control" id="pilih_mpl">
                                <option value="">Pilih Mata Pelajaran</option>
                                <?php 
                                  $query_tampil=mysqli_query($konek,"SELECT * FROM mpl ORDER BY nama_mpl ASC");
                                while ($data=mysqli_fetch_array($query_tampil)) {
                  
                                ?><?php echo '<option value="'.$data["id_mpl"].'">'.$data["nama_mpl"].'</option>';} ?>
                                 
                              </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Jam Mengajar</label>
                          :
                          <div class="col-sm-8" style="margin-left:30px;">
                            <div class="row">
                              <div class="col-12">
                                  <div class="form-check form-check-inline" sty>
                                      <input type="radio" class="form-check-input" name="jamMengajar"  value="1" checked>
                                      <label class="form-check-label" for="radioMale">1</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                      <input type="radio" class="form-check-input" value="2" name="jamMengajar">
                                      <label class="form-check-label" for="radioFemale">2</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                      <input type="radio" class="form-check-input" value="3" name="jamMengajar">
                                      <label class="form-check-label" for="radioFemale">3</label>
                                  </div>
                                  <div class="form-check form-check-inline ms-3">
                                      <input type="radio" class="form-check-input" value="4" name="jamMengajar">
                                      <label class="form-check-label" for="radioFemale">4</label>
                                  </div>
                              </div>
                            </div>
                          </div>
                      </div>
                       <div class="row mb-3">

                          <div class="col-sm-10 offset-sm-2">
                            <!-- <input type="batal" value="Batal" name="batal" onclick="closeForm()" style="width:25%; background: #ff3333;" /> -->
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
