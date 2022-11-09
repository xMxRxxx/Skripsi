<?php
  include '../db/koneksi.php';
  include 'akses.php';
  include '../layout/header.php';
?>
<div id="content">
  <div id="content-header">
    
    <h1>Absensi</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-calendar"></i> </span>
            <h4>Absensi Siswa</h4>
            <!-- <div class="widget-content nopadding"> -->
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>no</th>
                  <th>Nama</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
              </tr>
              </thead>
              <tbody>
                
                <tr class="gradeX">
                  <td>1</td>
                  <td>Ucok</td>
                  <td>H</td>
                  <td>H</td>
                  <td>H</td>
                  <td style="color: red;">A</td>
                  <td>H</td>
                </tr>
                <tr class="gradeX">
                  <td>2</td>
                  <td>Rivan</td>
                  <td>H</td>
                  <td>H</td>
                  <td>H</td>
                  <td>H</td>
                  <td>H</td>
                </tr>
                <tr class="gradeX">
                  <td>3</td>
                  <td>Udin</td>
                  <td style="color: red;">A</td>
                  <td style="color: red;">A</td>
                  <td style="color: red;">A</td>
                  <td style="color: red;">A</td>
                  <td style="color: red;">A</td>
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
<?php include '../layout/footer.php'; ?>
