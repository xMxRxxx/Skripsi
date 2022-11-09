<?php
  include '../db/koneksi.php';
  include 'akses.php';
  include '../layout/header.php';
?>
<div id="content">
  <div id="content-header">
    
    <h1>Mata Pelajaran</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            <h4>Mata Pelajaran Siswa</h4>
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
<?php include '../layout/footer.php'; ?>
