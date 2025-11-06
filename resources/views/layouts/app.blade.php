<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM-Surat Digital</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    /* -------------------- LAYOUT -------------------- */
    body {
      display: flex;
      min-height: 100vh;
      overflow-x: hidden;
      transition: all 0.3s ease;
    }

    /* -------------------- SIDEBAR -------------------- */
    .sidebar {
      width: 17vw;
      background-color: var(--putih);
      border-right: 2.5px solid color-mix(in srgb, var(--abu) 45%, #000 10%);
			box-shadow: 0 8px 30px rgba(16, 24, 40, 0.05);
      padding: 1.5rem 1rem;
      display: flex;
      flex-direction: column;
      transition: width 0.3s ease;
      position: relative;
    }

    .sidebar .nav-link {
      color: var(--hitam);
      font-size: var(--font-small);
      border-radius: .6rem;
      padding: 0.8rem 1rem;
      transition: all 0.2s ease;
      display: flex;
      align-items: center;
      gap: 0.8rem;
			font-weight: 600;
    }

    .sidebar .nav-link.active {
      background: color-mix(in srgb, var(--biru) 10%, var(--putih));
      color: var(--biru);
			border-left: 5px solid var(--biru);
			padding-left: calc(1rem - 4px); /* kompensasi agar teks tidak bergeser */
    }

    .sidebar .nav-link:hover {
      background: color-mix(in srgb, var(--abu) 80%, var(--putih));
			transform: translateX(2px);
			color: var(--biru);
    }

    /* -------------------- COLLAPSE SIDEBAR -------------------- */
		#sidebarToggle:hover {
			background-color: var(--abu);
		}

		/* Tambahan untuk animasi collapse */
		.sidebar.collapsed {
			width: 5rem;
		}

		/* Sembunyikan teks di sidebar */
		.sidebar.collapsed .nav-link span,
		.sidebar.collapsed .sidebar-header .d-flex.flex-column {
			display: none !important;
		}

		/* Rata-tengah ikon saat collapsed */
		.sidebar.collapsed .nav-link {
			justify-content: center;
			padding: 0.8rem 0;
		}

		/* Header sidebar */
		.sidebar-header {
			position: relative;
			min-height: 2rem;
		}

		/* Sembunyikan logo saat collapsed */
		.sidebar.collapsed #logo {
			display: none !important;
		}

		/* Sembunyikan teks nama dan subteks */
		.sidebar.collapsed .sidebar-header .d-flex.flex-column {
			display: none !important;
		}

		/* Saat collapsed, tombol hamburger muncul di atas sidebar */
		.sidebar.collapsed #sidebarOpenBtn {
			display: flex !important;
			position: absolute;
			top: 0.5rem;
			left: 50%;
			transform: translateX(-50%);
		}

		/* Sembunyikan tombol silang ketika collapsed */
		.sidebar.collapsed #sidebarCloseBtn {
			display: none !important;
		}

		/* Default: tombol hamburger tidak terlihat ketika sidebar terbuka */
		#sidebarOpenBtn {
			display: none;
		}


    /* -------------------- MAIN CONTENT -------------------- */
    .main-content {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      transition: margin-left 0.3s ease;
    }

    /* -------------------- TOPBAR -------------------- */
    .topbar {
      background-color: var(--putih);
			border-bottom: 1px solid rgba(15, 23, 42, 0.09);
			box-shadow: 0 6px 18px rgba(16, 24 ,40, 0.04);
      padding: 0.7rem 1.25rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .content-wrapper {
      flex-grow: 1;
      padding: 1rem;
    }
  </style>
</head>
<body>

  {{-- SIDEBAR - TOP --}}
  <aside class="sidebar" id="sidebar">
		<div class="sidebar-header d-flex align-items-center justify-content-between">
			<div class="d-flex align-items-center gap-2">
				<img src="{{ asset('img/logo.svg') }}" id="logo" alt="logo" class="img-svg-repo" style="height: 3rem;">
				<div class="d-flex flex-column">
					<span class="fw-bold">SIM-Surat Digital</span>
					<span class="text-muted" style="font-size: 0.8rem;">Prodi D3 Sekretari</span>
				</div>
			</div>
			<!-- Tombol Tutup Sidebar -->
      <button id="sidebarCloseBtn" class="border-0" style="background-color: transparent;">
        <img src="{{ asset('img/sidebar-silang.svg') }}" alt="silang" height="18">
      </button>

      <!-- Tombol Buka Sidebar -->
      <button id="sidebarOpenBtn" class="border-0" style="background-color: transparent;">
        <img src="{{ asset('img/sidebar-hamburger-menu.svg') }}" alt="hamburger-menu" height="18">
      </button>
		</div>
		
		{{-- SIDEBAR - MID --}}
		<hr>
    <ul class="nav flex-column mb-4">
			<li>
				<a href="#" class="nav-link {{ request()->is('beranda') ? 'active' : '' }}">
					<img src="{{ asset('img/sidebar-beranda.svg') }}" alt="" height="20">
					<span>Beranda</span>
				</a>
			</li>
      <li>
				<a href="#" class="nav-link {{ request()->is('surat-masuk*') ? 'active' : '' }}">
					<img src="{{ asset('img/sidebar-surat-masuk.svg') }}" alt="" height="20">
					<span>Surat Masuk</span>
				</a>
			</li>
      <li>
				<a href="#" class="nav-link {{ request()->is('surat-keluar*') ? 'active' : '' }}">
					<img src="{{ asset('img/sidebar-surat-keluar.svg') }}" alt="" height="20">
					<span>Surat Keluar</span>
				</a>
			</li>
      <li>
				<a href="#" class="nav-link {{ request()->is('disposisi*') ? 'active' : '' }}">
					<img src="{{ asset('img/sidebar-disposisi.svg') }}" alt="" height="20">
					<span>Disposisi</span>
				</a>
			</li>
      <li>
				<a href="#" class="nav-link {{ request()->is('pengaturan*') ? 'active' : '' }}">
					<img src="{{ asset('img/sidebar-pengaturan.svg') }}" alt="" height="20">
					<span>Pengaturan</span>
				</a>
			</li>
    </ul>

		{{-- SIDEBAR - BOTTOM --}}
		<div class="mt-auto">
			<hr>
			<a href="{{ route('logout') }}" class="nav-link" style="color: red;">
				<img src="{{ asset('img/sidebar-logout.svg') }}" alt="logout" height="20">
				<span>Keluar</span>
			</a>
		</div>
  </aside>



  {{-- MAIN CONTENT --}}
  <div class="main-content">

    {{-- TOPBAR --}}
    <nav class="topbar d-flex justify-content-between align-items-center">
			<div>
				@yield('topbar')
			</div>

			<div class="d-flex flex-column align-items-end ms-auto pe-3">
				<span class="fw-semibold">{{ Auth::user()->name }}</span>
				<small class="text-muted">{{ Auth::user()->role }}</small>
			</div>
    </nav>

    {{-- KONTEN --}}
    <div class="content-wrapper">
      @yield('content')
    </div>

  </div>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script>
    document.addEventListener("DOMContentLoaded", function () {
      const sidebar = document.getElementById("sidebar");
      const closeBtn = document.getElementById("sidebarCloseBtn");
      const openBtn = document.getElementById("sidebarOpenBtn");
  		const logo = document.getElementById("logo");

      // Ambil status sidebar dari localStorage
      const collapsed = localStorage.getItem("sidebar-collapsed") === "true";
      if (collapsed) sidebar.classList.add("collapsed");

      // Tombol silang (collapse)
      closeBtn.addEventListener("click", () => {
        sidebar.classList.add("collapsed");
        localStorage.setItem("sidebar-collapsed", "true");
      });

      // Tombol hamburger (expand)
      openBtn.addEventListener("click", () => {
        sidebar.classList.remove("collapsed");
        localStorage.setItem("sidebar-collapsed", "false");
      });
    });
  </script>

</body>
</html>
