<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">
    @include('components.navbar')

    <div class="container-fluid page-body-wrapper">
      @include('components.sidebarfix')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <h3 class="font-weight-bold">Daftar Informasi PKL</h3>
            </div>
          </div>

          <div class="row" id="pklCardContainer">
            <!-- Kartu PKL akan dimuat di sini -->
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script>
    function muatDataPkl() {
      const daftarPkl = JSON.parse(localStorage.getItem("daftarPkl")) || [];
      const cardContainer = document.getElementById("pklCardContainer");

      // Bersihkan kartu sebelum mengisi ulang
      cardContainer.innerHTML = "";

      daftarPkl.forEach((pkl) => {
        const card = document.createElement("div");
        card.className = "card mb-3"; // Card bootstrap dengan margin bawah
        card.innerHTML = `
          <div class="card-body">
            <h5 class="card-title">${pkl.nama_perusahaan}</h5>
            <p class="card-text"><strong>Alamat:</strong> ${pkl.alamat_perusahaan}</p>
            <p class="card-text"><strong>Role:</strong> ${pkl.role}</p>
            <p class="card-text"><strong>Periode PKL:</strong> ${pkl.periode}</p>
            <p class="card-text"><strong>Surat Permohonan:</strong> <a href="#" class="text-primary">${pkl.surat_permohonan}</a></p>
            <p class="card-text"><strong>Surat Penerimaan:</strong> <a href="#" class="text-primary">${pkl.surat_penerimaan}</a></p>
            <button class="btn btn-warning btn-sm" onclick="editpkl()">Edit</button>
          </div>
        `;
        
        cardContainer.appendChild(card);
      });
    }

    function editPkl() {
      // Redirect to editpkl.blade.php
      window.location.href = `editpkl`; // Use this URL based on your Laravel routing
    }

    window.onload = function() {
      muatDataPkl(); // Load data when the page is ready
    };
  </script>

  <style>
    /* Gaya untuk kartu PKL */
    #pklCardContainer {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem; /* Spasi antara kartu */
    }
    .card {
      flex: 1 0 21%; /* Ukuran kartu, bisa disesuaikan */
      min-width: 200px; /* Lebar minimum */
    }
  </style>
</body>

</html>
