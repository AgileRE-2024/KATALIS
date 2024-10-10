<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body>
  <div class="container-scroller">
    @include('components.navbarDosen')
    <div class="container-fluid page-body-wrapper">
      @include('components.sidebarDosen')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <h3 class="font-weight-bold">Daftar Mahasiswa Bimbingan</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Topik PKL</th>
                    <th>Tempat PKL</th>
                    <th>Teman Sekelompok</th>
                    <th>Proposal PKL</th>
                  </tr>
                </thead>
                <tbody id="mahasiswaTableBody">
                  <tr>
                    <td>Alice Johnson</td>
                    <td>12345678</td>
                    <td>Pengembangan Aplikasi Mobile</td>
                    <td>PT. Teknologi Indonesia</td>
                    <td>Bob Smith</td>
                    <td><a href="#">Lihat Proposal</a></td>
                  </tr>
                  <tr>
                    <td>David Brown</td>
                    <td>23456789</td>
                    <td>Data Science untuk Bisnis</td>
                    <td>PT. Data Cerdas</td>
                    <td>Charlie Davis</td>
                    <td><a href="#">Lihat Proposal</a></td>
                  </tr>
                  <tr>
                    <td>Emily White</td>
                    <td>34567890</td>
                    <td>Keamanan Jaringan</td>
                    <td>PT. Cyber Safe</td>
                    <td>Daniel Wilson</td>
                    <td><a href="#">Lihat Proposal</a></td>
                  </tr>
                  <tr>
                    <td>Frank Green</td>
                    <td>45678901</td>
                    <td>Analisis Big Data</td>
                    <td>PT. Big Data Solutions</td>
                    <td>Emma Thompson</td>
                    <td><a href="#">Lihat Proposal</a></td>
                  </tr>
                  <tr>
                    <td>Grace Lee</td>
                    <td>56789012</td>
                    <td>Web Development</td>
                    <td>PT. Web Creations</td>
                    <td>Henry Adams</td>
                    <td><a href="#">Lihat Proposal</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  
</body>
</html>
