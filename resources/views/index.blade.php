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

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>Pelatihan IT & Multimedia </h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
              <span class="text-end d-block">98%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>Branding & Design</h3>
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
              <span class="text-end d-block">90%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>Web Development</h3>
              <p>Neque porro quisquam est qui dolorem ipsum quia dolor.</p>
              <span class="text-end d-block">96%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>Mobile App Development</h3>
              <p>Quis autem vel eum iure reprehenderit qui in ea voluptate.</p>
              <span class="text-end d-block">94%</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="resume-wrapper">
              <div class="resume-block" data-aos="fade-up">
                <h2>Work Experience</h2>
                <p class="lead">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Etiam Industries</h4>
                      <span class="period">Jun, 2023 - Current</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Project Lead</h3>
                      <p class="description">Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Nullam Corp</h4>
                      <span class="period">2019 - 2023</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Senior graphic design specialist</h3>
                      <p class="description">
                        Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus maecenas tempus.
                      </p>
                      <ul>
                        <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                        <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                      </ul>
                      <p></p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-left">
                      <h4 class="company">Stepping Stone Ltd.</h4>
                      <span class="period">2015-2019</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Graphic design specialist</h3>
                      <p class="description">Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus maecenas tempus.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                <h2>My Education</h2>
                <p class="lead">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing.</p>

                <div class="timeline">
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company">Vestibulum University</h4>
                      <span class="period">2017-2019</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Diploma in Consequat</h3>
                      <p class="description">Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus maecenas tempus.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-left">
                      <h4 class="company">Nullam Corp</h4>
                      <span class="period">2019 - 2023</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Master of Fine Arts &amp; Graphic Design</h3>
                      <p class="description">Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus maecenas tempus.</p>
                    </div>
                  </div>

                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-left">
                      <h4 class="company">Vestibulum University</h4>
                      <span class="period">2015-2019</span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">Bachelor of Fine Arts &amp; Graphic Design</h3>
                      <p class="description">Curabitur ullamcorper ultricies nisi nam eget dui etiam rhoncus maecenas tempus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>Modern Dashboard Interface</h3>
                  <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Motion</span>
                  <h3>Product Animation Reel</h3>
                  <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Branding</span>
                  <h3>Luxury Brand Package</h3>
                  <p>Aenean lacinia bibendum nulla sed consectetur elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>E-commerce Platform</h3>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Digital Art Collection</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

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
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
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

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Sed ut perspiciatis unde omnis</h2>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <p>
                      Beatae magnam dolore quia ipsum. Voluptatem totam et qui dolore dignissimos. Amet quia sapiente laudantium nihil illo et assumenda sit cupiditate. Nam perspiciatis perferendis minus consequatur. Enim ut eos quo.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-m-7.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Saul Goodman</h3>
                        <span>Client</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-m-7.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Nemo enim ipsam voluptatem</h2>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <p>
                      Dolorem excepturi esse qui amet maxime quibusdam aut repellendus voluptatum. Corrupti enim a repellat cumque est laborum fuga consequuntur. Dolorem nostrum deleniti quas voluptatem iure dolorum rerum. Repudiandae doloribus ut repellat harum vero aut. Modi aut velit aperiam aspernatur odit ut vitae.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-f-8.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Sara Wilsson</h3>
                        <span>Designer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-f-8.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>
                      Labore nostrum eos impedit
                    </h2>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                    <p>
                      Itaque ut explicabo vero occaecati est quam rerum sed. Numquam tempora aut aut quaerat quia illum. Nobis quia autem odit ipsam numquam. Doloribus sit sint corporis eius totam fuga. Hic nostrum suscipit corrupti nam expedita adipisci aut optio.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-m-9.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Matt Brandon</h3>
                        <span>Freelancer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-m-9.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Impedit dolor facilis nulla</h2>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <p>
                      Omnis aspernatur accusantium qui delectus praesentium repellendus. Facilis sint odio aspernatur voluptas commodi qui qui qui pariatur. Corrupti deleniti itaque quaerat ipsum deleniti culpa tempora tempore. Et consequatur exercitationem hic aspernatur nobis est voluptatibus architecto laborum.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-f-10.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Jena Karlis</h3>
                        <span>Store Owner</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-f-10.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

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
        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem</p>
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
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
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

              <div class="faq-item faq-active">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <h2 class="display-5 mb-4">Nemo enim ipsam voluptatem quia voluptas aspernatur</h2>
              <p class="lead mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>info@example.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+1 5589 55488 558</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>A108 Adam Street, New York, NY 535022</span>
                </div>

                <a href="#" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

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

</body>

</html>