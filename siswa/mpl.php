<?php
  include '../db/koneksi.php';
  include 'akses.php';
  include '../layout/header.php';
?>
<div id="content">
  <div class="regular-page-area section-padding-20">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="details-content">

              <h2><i class="icon-calendar"></i> Absensi </h2>

              <div class="container-fluid">
                <hr>
                <div class="row-fluid">
                  <div class="span12">
                    <div class="widget-box">
                      <div class="widget-title"> 
                        <!-- <div class="widget-content nopadding"> -->
                       <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>no</th>
                              <th>Hari</th>
                              <th colspan="10">Mata Pelajaran</th>
                              
                          </tr>
                          </thead>
                          <tbody>
                            
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
                            
                           
                          </tbody>
                        </table>
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
    </div>
  </div>
  
</div>

<?php include '../layout/footer.php'; ?>
