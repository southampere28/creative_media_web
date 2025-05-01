<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - EasyFolio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- Style Custom -->
  <style>
    .icon-wrapper {
      width: 80px; /* atur ukuran thumbnail */
      height: 80px;
      overflow: hidden;
      border-radius: 12px; /* rounded sedikit */
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f0f0f0; /* fallback warna */
      margin-bottom: 15px; /* jarak ke bawah */
    }

    .icon-image {
      width: 100%;
      height: 100%;
      object-fit: cover; /* mirip BoxFit.cover */
    }
    
    /* Style Untuk Client Logo Berjalan */
    /* Marquee container */
    .client-section {
        padding: 40px 0;
        background-color: #f9f9f9;
        text-align: center;
    }
    
    .client-section h3 {
        font-size: 28px;
        margin-bottom: 30px;
        color: #333;
        font-weight: 600;
    }
    
    .logo-marquee {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 100%;
        padding: 20px 0;
    }
    
    .logo-container {
        display: inline-flex;
        animation: marqueescroll 15s linear infinite;
        padding: 0 20px;
    }
    
    /* This class is added/removed via JavaScript when hovering */
    .paused {
        animation-play-state: paused;
    }
    
    /* Each logo item */
    .client-logo {
        display: inline-block;
        margin: 0 30px;
        text-align: center;
        vertical-align: middle;
    }
    
    .client-logo img {
        height: 80px;
        width: 80px;
        object-fit: contain;
        margin-bottom: 8px;
    }
    
    .client-logo p {
        font-size: 14px;
        color: #555;
        max-width: 120px;
        margin: 0 auto;
    }
    
    @keyframes marqueescroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* Style untuk Team */
    .team-card {
      transition: all 0.3s ease;
      cursor: pointer;
      position: relative;
    }

    .team-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.75);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      opacity: 0;
      transition: opacity 0.3s ease;
      padding: 20px;
      overflow-y: auto;
    }

    .team-overlay p {
      max-height: 100%;
      overflow-y: auto;
    }

    .team-card:hover .team-overlay {
      opacity: 1;
    }

  </style>
</head>

<body class="index-page">

  <x-navheader></x-navheader>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>Creative Media: Upgrade Skill, Raih Karir Impian!</h2>
            <p class="lead">Transforming ideas into elegant solutions through creative design and innovative development</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="#portfolio" class="btn btn-primary">Daftar Sekarang</a>
              <a href="#contact" class="btn btn-outline">Hubungi Kami</a>
            </div>
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number">10+</span>
                <span class="stat-label">Tahun Pengalaman</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-label">Jumlah Client</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">3k+</span>
                <span class="stat-label">Siswa Terdaftar</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/profile/profile-1.webp" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
      </div><!-- End Section Title -->
      
      {{-- Section untuk tentang perusahaan --}}
      <div class="row justify-content-center">
        <div class="col-5" data-aos="fade-right">
          <div class="container ms-5 me-4 mb-5">
            <h5>Creative Media merupakan perusahaan Digital Agency & IT Consultant di Surabaya. Kami berfokus pada Computer Course & Training, Branding & Design, Web Development & Mobile Apps Development. Kami mempunyai 15 bidang studi unggulan yaitu: Komputer Umum & Internet, Desain Grafis, Animasi, Digital Marketing, Desain Interior, Desain Arsiterktur, Administrasi Perkantoran, Komputer Akuntansi, Editing Video Multimedia, Website Design CMS, Web Designer, Programming Web, Programming Java Android, Photography.</h5>
          </div>
        </div>
        <div class="col-5" data-aos="fade-left">
          <div class="container ms-4 me-5 mb-5">
            <h5>Selain Kursus dan Pelatihan IT Multimedia kami menyediakan Devisi Development yang berfokus pada Development Website, Sistem Aplikasi Perusahaan, Aplikasi Android & iOS, dll. Bagi Anda yang ingin konsultasi terkait kebutuhan IT dan Digitalisasi sistem di Perusahaan bisa menghubungi Tim kami untuk mendapatkan Solusi Terbaik.</h5>
          </div>
        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Client Section -->
    <section class="client-section">
      <div class="container">
          <h3>Kami dipercaya Oleh:</h3>
          
          <div class="logo-marquee" id="logoMarquee">
              <div class="logo-container" id="logoContainer">
                  <!-- Logo items - duplicate these for continuous scrolling effect -->
                  @foreach ($clientposts as $post)
                  
                  <div class="client-logo">
                    <a href="{{$post->link}}"><img src="{{asset('storage/'.$post->image)}}" alt="Client Logos"></a>
                    <p>{{$post->nama}}</p>
                  </div>
                  
                  @endforeach

                  @foreach ($clientposts as $post)
                  
                  <div class="client-logo">
                    <a href="{{$post->link}}"><img src="{{asset('storage/'.$post->image)}}" alt="Client Logos"></a>
                    <p>{{$post->nama}}</p>
                  </div>
                  
                  @endforeach
                  
                </div>
          </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>Pelatihan IT & Multimedia </h3>
              <p>Sejak 2014, lebih dari 3000 siswa maupun perusahaan sudah mempercayakan lembaga kami sebagai mitra pelatihan terbaik.</p>
              <span class="text-end d-block">98%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>Branding & Design</h3>
              <p>Berbagai project Branding & Design perusahan sudah kami selesaikan, konsultasikan sekarang dengan kami.</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>Web Development</h3>
              <p>Kami merancang sistem website & aplikasi web-based sesuai dengan kebutuhan Perusahaan Swasta, BUMN & Pemerintahan.</p>
              <span class="text-end d-block">96%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Mobile App Development</h3>
              <p>Kami membuat aplikasi Android & iOS sesuai dengan kebutuhan Perusahaan Anda.</p>
              <span class="text-end d-block">94%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Berbagai layanan jasa dengan harga affordable seperti Course & Training, Branding & Design, Mobile App, dan Website</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="row g-4">

              @foreach ($serviceposts as $post)
              
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item">
                  <div class="icon-wrapper">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="Service Icon" class="icon-image">
                  </div>
                  <h3><a href="{{route('detail.service', $post->name)}}">{{$post->name}}</a></h3>
                  <p>{{$post->description}}.</p>
                </div>
              </div><!-- End Service Item -->
              
              @endforeach

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Bidang Study Section -->
    <section id="bidangstudy" class="bidangstudy">
      <container class="section-title" data-aos="fade-up">
        <h2>bidang studi</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Ayo telusuri detail dan mulai belajar dengan memilih bidang studi yang sesuai dengan peminatan kamu!</p>
      </container>
      <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">
      <div class="isotope-layout">
        <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
          @foreach ($studyposts as $post)
          <div class="col-lg-4 col-md-4 portfolio-item isotope-item">
            <div class="portfolio-card">
              <div class="portfolio-image">
                @if ($post->image)
                  <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="" loading="lazy">
                @else
                  <img src="{{asset('assets/img_404.jpg')}}" class="img-fluid" alt="" loading="lazy">
                @endif
                <div class="portfolio-overlay">
                  <div class="portfolio-actions">
                    <a href="{{ route('detail.study', $post->name) }}" class="details-link"><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="portfolio-content">
                {{-- <span class="category">{{$post->name}}</span> --}}
                <span class="category">Bidang Studi</span>
                <h3>{{$post->name}}</h3>
              </div>
            </div>
          </div><!-- End Portfolio Item -->
          @endforeach
        </div>
      </div>
      </div>
    </section>

    <!-- Faq Section -->
    {{-- <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Teams</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section --> --}}

    {{-- team section --}}

    <section class="team-section py-5 bg-light">
      <div class="container">
        <h3 class="text-center mb-5">Tim Kami</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          @foreach ($teamposts as $member)
          <div class="col">
            <div class="card border-0 bg-white shadow-sm text-center p-3 h-100 team-card position-relative overflow-hidden">
              <img src="{{ asset('storage/'.$member->image) }}" class="rounded-circle mx-auto mb-3" style="width: 100px; height: 100px; object-fit: cover;" alt="{{ $member->name }}">
              <h5 class="mb-1">{{ $member->name }}</h5>
              <hr class="mx-auto" style="width: 60px;">
              <p class="text-muted mb-0">{{ $member->role }}</p>

              {{-- Deskripsi hover --}}
              <div class="team-overlay">
                <p class="text-white px-3">{{ $member->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Berikut ini 3 testimoni dari siswa kami yang telah belajar di Creative Media</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            @foreach ($testimoniposts as $post)
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>{{$post->name}}</h2>
                    <p>{{$post->comment}}</p>
                    <div class="profile d-flex align-items-center">
                      
                      @if ($post->image)
                        <img src="{{asset('storage/'.$post->image)}}" class="profile-img" alt="profile pengguna">
                        @else
                        <img src="https://dummyimage.com/400x400/000/fff" class="profile-img" alt="profile pengguna">
                      @endif
                      
                      <div class="profile-info">
                        <h3>{{$post->name}}</h3>
                        <span>Student</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block text-end">
                    <div class="featured-img-wrapper ms-auto">
                      @if ($post->image)
                      <img src="{{asset('storage/'.$post->image)}}" class="featured-img" alt="">
                      @else
                      <img src="https://dummyimage.com/400x400/000/fff" class="featured-img" alt="">
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->
            
            @endforeach
            
          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          @foreach ($contactposts as $index => $post) 
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">kontak {{$index+1}}</div>
              <h2 class="display-5 mb-4">{{$post->location}}</h2>
              <p class="lead mb-4">Hubungi kontak Creative Media bagian {{$post->location}} melalui informasi dibawah.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>{{$post->email}}</span>
                </div>

                @foreach(explode(',', $post->contact) as $contact)
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>{{ trim($contact) }}</span>
                </div>
                @endforeach

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>{{$post->address}}</span>
                </div>

                <a href="https://www.google.com/maps/search/creative+media+surabaya/@-7.2915156,112.7223091,11z?entry=ttu&g_ep=EgoyMDI1MDQyNy4xIKXMDSoASAFQAw%3D%3D" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">EasyFolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("assets/vendor/waypoints/noframework.waypoints.js")}}"></script>
  <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>

  <!-- Main JS )}}File -->
  <script src="{{asset("assets/js/main.js")}}"></script>

  {{-- running logo script --}}

  <script>
    // Get elements
    const logoMarquee = document.getElementById('logoMarquee');
    const logoContainer = document.getElementById('logoContainer');
    
    // Add event listeners for mouse hover
    logoMarquee.addEventListener('mouseenter', function() {
        logoContainer.classList.add('paused');
    });
    
    logoMarquee.addEventListener('mouseleave', function() {
        logoContainer.classList.remove('paused');
    });
  </script>

</body>

</html>