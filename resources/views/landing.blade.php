<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM-Surat Digital</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
  <style>
    .hero {
      padding: var(--section-padding) 0;
      background-color: var(--biru);
      color: var(--putih);
      min-height: 100vh;
      text-align: center;
      display: flex;
      align-items: center;
    }

    .hero h1 {
      margin-bottom: 1rem;
    }

    .hero p {
      margin-bottom: 2rem;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .feature-card {
      transition: all 0.3s ease;
      border-radius: 1rem;
      background-color: var(--putih);
    }

    .feature-card:hover {
      transform: translateY(-0.4rem);
      box-shadow: 0 1rem 1.25rem rgba(0, 0, 0, 0.08);
    }

    .icon-wrapper {
      width: 25%;
      aspect-ratio: 1 / 1;
    }

    #about img:hover {
      transform: scale(1.02);
      box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="img-svg-repo" style="margin-right: 0.75rem">
        <div class="d-flex flex-column lh-sm">
          <span class="fw-semibold text-primary" style="font-size: 1.25rem;">SIM-Surat</span>
          <small class="text-secondary" style="font-size: 0.85rem;">Prodi D3 Sekretari USK</small>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link fw-medium mx-2" href="#beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link fw-medium mx-2" href="#features">Fitur</a></li>
          <li class="nav-item"><a class="nav-link fw-medium mx-2" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link fw-medium mx-2" href="#contact">Kontak</a></li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
              Masuk
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="hero text-center">
    <div class="container">
      <h1 class="fw-600 mb-4">Sistem Informasi Manajemen Surat Digital untuk UMKM</h1>
      <p class="lead mb-5">Kelola surat masuk, surat keluar, disposisi & tanda tangan elektronik dalam satu sistem sederhana dan profesional.</p>
      <button type="button" class="btn btn-light btn-lg text-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
        Mulai Gunakan Sekarang
      </button>
    </div>
  </section>

  <section id="features" class="py-4 sections" style="min-height: 100vh;">
    <div class="container">
      <h2 class="fw-600 text-center mb-5">Fitur Unggulan</h2>

      <div class="row g-4 justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/surat.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Surat Masuk & Keluar</h5>
              <p class="fs-5 text-muted mb-0">
                Nomor agenda otomatis, upload file, mudah diakses kapan saja
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/disposisi.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Disposisi Online</h5>
              <p class="fs-5 text-muted mb-0">
                Pimpinan memberi instruksi, Kepala Divisi meneruskan, staf menindaklanjuti
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/ttd.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Tanda Tangan Digital</h5>
              <p class="fs-5 text-muted mb-0">
                Paraf elektronik pada PDF
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/pelacakan.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Arsip & Pelacakan</h5>
              <p class="fs-5 text-muted mb-0">
                Simpan surat dan hasil tindak lanjut, lihat siapa yang sudah membaca atau tindaklanjuti
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/multiusers.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Mendukung Multi-User</h5>
              <p class="fs-5 text-muted mb-0">
                Admin, Pimpinan, Sekretaris, Kepala Divisi, Staff (semua dalam satu sistem)
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm feature-card text-center h-100">
            <div class="card-body p-4">
              <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center">
                <img src="{{ asset('img/template.svg') }}" class="img-svg-repo">
              </div>
              <h5 class="fw-semibold mb-2">Template Surat Resmi</h5>
              <p class="fs-5 text-muted mb-0">
                Pilih format standar instansi Anda dan mulai langsung
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="about" class="py-5 bg-white" style="min-height: 100vh;">
    <div class="container">
      <h2 class="fw-600 text-center mb-5">Tentang</h2>
      
      <div class="row align-items-center g-4">
        <div class="col-md-6">
          <img src="{{ asset('img/usk.jpeg') }}" alt="Universitas Syiah Kuala" class="img-fluid rounded-4 shadow-sm" style="transition: transform 0.4s ease, box-shadow 0.4s ease;"/>
        </div>

        <div class="col-md-6">
          <h2 class="fw-bold mb-3">
            Lahir dari Visi Akademik</span>
          </h2>
          <p class="mb-3" style="text-align: justify">
            <strong>SIM-Surat</strong> dikembangkan oleh tim dosen dan mahasiswa 
            <strong>Program Studi D3 Sekretari Fakultas Ekonomi dan Bisnis Universitas Syiah Kuala</strong>
            sebagai inovasi dalam rangka digitalisasi administrasi perkantoran.
          </p>
          <p class="mb-3" style="text-align: justify">
            Aplikasi ini dirancang untuk menjawab kebutuhan industri dan UMKM dalam
            pengelolaan surat resmi yang lebih <strong>cepat, efisien, transparan, dan terdokumentasi dengan baik</strong>.
          </p>
          <p class="mb-0" style="text-align: justify">
            Selain sebagai karya akademik, SIM-Surat ini juga menjadi bentuk
            kontribusi nyata <strong>Program Studi D3 Sekretari</strong> dalam mendukung
            transformasi digital dan peningkatan tata kelola administrasi di era modern.
          </p>
        </div>
      </div>
    </div>
  </section>




  <section id="contact" class="py-5 bg-light" style="min-height: 100vh;">
    <div class="container">
      <h2 class="fw-600 text-center mb-5">Hubungi Kami</h2>

      <div class="row g-4 align-items-center">
        <!-- Form Kontak -->
        <div class="col-lg-6">
          <div class="bg-white shadow rounded-4 p-4">
            <h2 class="fw-bold mb-4">Kirim Pesan</h2>
            <form>
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nama <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="text" class="form-control border-start-0" id="name" placeholder="Nama Anda" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <input type="email" class="form-control border-start-0" id="email" placeholder="email@anda.com" required>
                </div>
              </div>

              <div class="mb-3">
                <label for="message" class="form-label fw-semibold">Pesan <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" rows="4" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
              </div>

              <button type="submit" class="btn btn-primary w-100 d-flex align-items-center justify-content-center gap-2">
                Kirim
              </button>
            </form>
          </div>
        </div>

        <!-- Info Kontak -->
        <div class="col-lg-6">
          <div class="d-flex flex-column gap-3">

            <div class="bg-white shadow-sm rounded-4 p-4 d-flex">
              <div class="bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                <img src="{{ asset('img/kirim.svg') }}" alt="Email" class="img-svg-repo">
              </div>
              <div>
                <h5 class="fw-semibold mb-1">Email Support</h5>
                <p class="mb-0 text-body">muliatiusman@usk.ac.id</p>
                <small class="text-muted">Respon dalam 1x24 jam kerja.</small>
              </div>
            </div>

            <div class="bg-white shadow-sm rounded-4 p-4 d-flex">
              <div class="bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                <img src="{{ asset('img/alamat.svg') }}" alt="Alamat" class="img-svg-repo">
              </div>
              <div>
                <h5 class="fw-semibold mb-1">Alamat Kantor</h5>
                <p class="mb-0 text-body">
                  Jalan Teuku Nyak Arief, Kopelma Darussalam Banda Aceh
                </p>
                <small class="text-muted">Fakultas Ekonomi dan Bisnis USK</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <footer class="footer">
    <div class="container">
      <p class="mb-0">&copy; 2025 SIM-Surat. All rights reserved.</p>
    </div>
  </footer>


  
  <!-- Modal Login -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Header -->
        <div class="modal-header justify-content-center position-relative">
          <h1 class="modal-title fs-5 m-0 text-center">Login</h1>
          <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <form method="POST" action="#">
            @csrf
            <div class="mb-3">
              <label for="login_email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="login_email" name="email" placeholder="nama@perusahaan.com" required>
            </div>
            <div class="mb-3">
              <label for="login_kata_sandi" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="login_kata_sandi" name="kata_sandi" placeholder="Masukkan Kata Sandi" required>
            </div>

            <!-- Tombol di kanan bawah -->
            <div class="d-flex justify-content-center mt-1">
              <button type="submit" class="btn btn-primary" style="width: 100%">Masuk</button>
            </div>
          </form>
        </div>

        <!-- Garis pemisah -->
        <div class="d-flex align-items-center my-1">
          <hr class="flex-grow-1">
          <span class="mx-2 text-muted">Atau</span>
          <hr class="flex-grow-1">
        </div>

        <!-- Link Daftar -->
        <div class="text-center mb-3">
          <span class="text-muted">Belum punya akun?</span>
          <a href="#" class="text-primary fw-semibold text-decoration-none ms-1" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">
            Daftar sekarang
          </a>
        </div>

      </div>
    </div>
  </div>



  <!-- Modal Register -->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

      <!-- Header -->
        <div class="modal-header justify-content-center position-relative">
          <h1 class="modal-title fs-5 m-0 text-center">Daftar Akun</h1>
          <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <form method="POST" action="#">
            @csrf
            <div class="mb-3">
              <label for="register_name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="register_name" name="name" placeholder="Nama Anda" required>
            </div>
            <div class="mb-3">
              <label for="register_email" class="form-label">Email</label>
              <input type="email" class="form-control" id="register_email" name="email" placeholder="nama@perusahaan.com" required>
            </div>
            <div class="mb-3">
              <label for="register_kata_sandi" class="form-label">Password</label>
              <input type="password" class="form-control" id="register_kata_sandi" name="kata_sandi" placeholder="Masukkan Password" required>
            </div>

            <div class="d-flex justify-content-center my-2">
              <button type="submit" class="btn btn-success" style="width: 100%">Daftar</button>
            </div>
          </form>

          <!-- Link balik ke Login -->
          <div class="text-center mt-3">
            <span class="text-muted">Sudah punya akun?</span>
            <a href="#" class="text-primary fw-semibold text-decoration-none ms-1" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">
              Masuk sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script>
    // Modal Login - Autofocus
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })
  </script>
</body>
</html>
