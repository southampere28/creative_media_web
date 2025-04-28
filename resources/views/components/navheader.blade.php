<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Creative Media</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="{{route('pageview.karyasiswa')}}" target="_blank">Karya Siswa</a></li>
          {{-- <li><a href="#services">Services</a></li> --}}
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('detail.service', 'Course & Trainings') }}">Course & Trainings</a></li>
              <li><a href="{{ route('detail.service', 'Branding & Design') }}">Branding & Design</a></li>
                <li><a href="{{ route('detail.service', 'Mobile App Development') }}">Mobile App Development</a></li>
                <li><a href="{{ route('detail.service', 'Website Development') }}">Website Development</a></li>
            </ul>
            </li>
          <li class="dropdown"><a href="#bidangstudy"><span>Bidang Studi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('detail.study', 'Digital Marketing') }}">Digital Marketing</a></li>
              <li><a href="{{ route('detail.study', 'Desain Grafis') }}">Desain Grafis</a></li>
              <li><a href="{{ route('detail.study', 'Pemrograman Dasar') }}">Pemrograman Dasar</a></li>
              <li><a href="{{ route('detail.study', 'Komputer Umum & Internet') }}">Komputer Umum & Internet</a></li>
              <li><a href="{{ route('detail.study', 'Administrasi Perkantoran') }}">Administrasi Perkantoran</a></li>
              <li><a href="{{ route('detail.study', 'Komputer Akutansi') }}">Komputer Akutansi</a></li>
              <li><a href="{{ route('detail.study', 'Animasi 2D & 3D') }}">Animasi 2D & 3D</a></li>
              <li><a href="{{ route('detail.study', 'Website Desain CMS') }}">Website Desain CMS</a></li>
              <li><a href="{{ route('detail.study', 'Desain Interior') }}">Desain Interior</a></li>
              <li><a href="{{ route('detail.study', 'Desain Arsitektur') }}">Desain Arsitektur</a></li>
              <li><a href="{{ route('detail.study', 'Pemrograman Web Designer') }}">Pemrograman Web Designer</a></li>
              <li><a href="{{ route('detail.study', 'Pemrograman Web') }}">Pemrograman Web</a></li>
              <li><a href="{{ route('detail.study', 'Pemrograman Android') }}">Pemrograman Android</a></li>
              <li><a href="{{ route('detail.study', 'Videography') }}">Videography</a></li>
              <li><a href="{{ route('detail.study', 'Photography') }}">Photography</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>