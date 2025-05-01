
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
          <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
              <!-- ========   Change your logo from here   ============ -->
              <img src="{{ asset('/assets_admin/images/logo-dark.svg') }}" alt="logo">
            </a>
          </div>
          <div class="navbar-content">
            <ul class="pc-navbar">
              <li class="pc-item">
                <a href="{{route('dashboard.index')}}" class="pc-link">
                  <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                  <span class="pc-mtext">Dashboard</span>
                </a>
              </li>
      
              <li class="pc-item pc-caption">
                <label>UI Components</label>
                <i class="ti ti-dashboard"></i>
              </li>
              <li class="pc-item">
                <a href="{{route('adminview.study')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-book"></i></span>
                    <span class="pc-mtext">Bidang Studi</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="{{route('adminview.services')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-briefcase"></i></span>
                    <span class="pc-mtext">Layanan Jasa</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="{{route('adminview.karyasiswa')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-brush"></i></span>
                    <span class="pc-mtext">Karya Siswa</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="{{route('adminview.testimoni')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-message-dots"></i></span>
                    <span class="pc-mtext">Testimoni</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="{{route('adminview.contact')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-phone"></i></span>
                    <span class="pc-mtext">Kontak Perusahaan</span>
                </a>
            </li>
            <li class="pc-item">
                <a href="{{route('adminview.article')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-news"></i></span>
                    <span class="pc-mtext">Articles</span>
                </a>
            </li>
            <li class="pc-item">
              <a href="{{route('adminview.client')}}" class="pc-link">
                  <span class="pc-micon"><i class="ti ti-medal"></i></span>
                  <span class="pc-mtext">Client/Partner</span>
              </a>
            </li>          
            <li class="pc-item">
                <a href="{{route('adminview.team')}}" class="pc-link">
                    <span class="pc-micon"><i class="ti ti-users"></i></span>
                    <span class="pc-mtext">Daftar Anggota</span>
                </a>
            </li>
      
              <li class="pc-item pc-caption">
                <label>Other</label>
                <i class="ti ti-brand-chrome"></i>
              </li>
              <li class="pc-item pc-hasmenu">
                <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu
                    levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                <ul class="pc-submenu">
                  <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                      <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                          <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                          <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                      <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                      <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                      <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                          <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                          <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="pc-item">
                <a href="#" class="pc-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="pc-micon"><i class="ti ti-logout"></i></span>
                    <span class="pc-mtext">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('request.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
            </ul>
          </div>
        </div>
      </nav>