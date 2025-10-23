<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Manajemen Surat - UMKM</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">SIM-Surat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#features">Fitur</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
          <li class="nav-item"><a class="nav-link btn btn-outline-light ms-3" href="/login">Masuk</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero text-center">
    <div class="container">
      <h1 class="fw-600 mb-4">Digitalisasi Administrasi Surat untuk UMKM</h1>
      <p class="lead mb-5">Kelola surat masuk, surat keluar, disposisi & tanda tangan elektronik dalam satu sistem sederhana dan profesional.</p>
      <a href="/register" class="btn btn-primary btn-lg">Mulai Sekarang</a>
    </div>
  </section>

  <section id="features" class="features" style="padding: 80px 0">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-inbox-fill"></i></div>
          <h3>Surat Masuk & Keluar</h3>
          <p>Nomor agenda otomatis, upload file, mudah diakses kapan saja.</p>
        </div>
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-arrows-move"></i></div>
          <h3>Disposisi Online</h3>
          <p>Pimpinan memberi instruksi, Kepala Divisi meneruskan, staf menindaklanjuti.</p>
        </div>
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-file-earmark-text-fill"></i></div>
          <h3>Tanda Tangan Digital</h3>
          <p>Paraf elektronik pada PDF — tanpa cetak-mengeprint.</p>
        </div>
      </div>
      <div class="row text-center g-4 mt-5">
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-folder2-open"></i></div>
          <h3>Arsip & Pelacakan</h3>
          <p>Simpan surat dan hasil tindak lanjut, lihat siapa yang sudah membaca/tindaklanjuti.</p>
        </div>
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-people-fill"></i></div>
          <h3>Mendukung Multi-User</h3>
          <p>Admin, Pimpinan, Sekretaris, Kepala Divisi, Staff — semua dalam satu sistem.</p>
        </div>
        <div class="col-md-4">
          <div class="mb-3"><i class="bi bi-gear-fill"></i></div>
          <h3>Template Surat Resmi</h3>
          <p>Pilih format standar instansi Anda dan mulai langsung.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="py-5 bg-white">
    <div class="container">
      <h2 class="fw-600 text-center mb-4">Mengapa SIM-Surat?</h2>
      <p class="text-center mb-4">Kami memahami bahwa administrasi surat tradisional sering lambat, rentan kehilangan, dan sulit dipantau. Dengan SIM-Surat Anda bisa membawa semua proses ke platform digital yang sederhana, aman, dan efisien.</p>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4">
          <!-- <img src="{{ asset('images/about-dashboard.png') }}" alt="Dashboard aplikasi" class="img-fluid"> -->
        </div>
        <div class="col-md-6">
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Efisiensi waktu</strong> - input dan proses disposisi jadi cepat.</li>
            <li class="list-group-item"><strong>Penghematan kertas</strong> - tak perlu cetak fisik.</li>
            <li class="list-group-item"><strong>Transparansi</strong> - tahu siapa melakukan apa dan kapan.</li>
            <li class="list-group-item"><strong>Skalabilitas</strong> - cocok untuk UMKM yang berkembang.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="fw-600 text-center mb-4">Hubungi Kami</h2>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="email@contoh.com">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Tuliskan pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <p class="mb-0">&copy; 2025 SIM-Surat. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
