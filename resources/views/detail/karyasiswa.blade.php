<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karya Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <style>
        .student-card {
            transition: all 0.3s ease;
            border-radius: 10px;
        }

        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .student-card:hover .student-work-img {
            transform: scale(1.5);
        }

        .card-img-wrapper {
            height: 200px;
        }

        .student-work-img {
            height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .student-card:hover .card-overlay {
            background: rgba(0,0,0,0.3);
            opacity: 1;
        }
        
        .view-details {
            color: white;
            background: rgba(220, 53, 69, 0.8);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }
        
        .student-card:hover .view-details {
            transform: translateY(0);
        }

        /* Modal styles */
        .modal-content {
            border-radius: 15px;
            overflow: hidden;
        }
        
        .modal-header {
            border-bottom: 0;
        }
        
        .modal-footer {
            border-top: 0;
        }
    </style>

</head>

<body>
    <x-navheader></x-navheader>
    
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Galeri Karya Siswa</h2>
                    <p class="text-muted">Koleksi hasil karya terbaik dari para siswa kami</p>
                    <div class="divider mx-auto my-3" style="width: 60px; height: 3px; background-color: #dc3545;">
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4">
                @foreach ($studentWorks as $work)
                    <div class="col">
                        <div class="card student-card h-100 border-0 shadow-sm overflow-hidden" data-bs-toggle="modal" 
                         data-bs-target="#workModal-{{ $work->id }}">
                            <div class="card-img-wrapper overflow-hidden">
                                <img src="{{ asset('storage/'.$work->image) ?? 'https://dummyimage.com/500x400/ced4da/6c757d' }}"
                                    class="card-img-top student-work-img" alt="{{ $work->name }}"
                                    style="transition: transform 0.5s ease;">
                                  <div class="card-overlay">
                                      <div class="view-details">
                                          <i class="bi bi-eye-fill me-2"></i>Lihat Detail
                                      </div>
                                  </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $work->name }}</h5>
                                {{-- <p class="card-text text-muted mb-2">{{ $work->student_name }}</p> --}}
                                <p class="card-text small">{{ Str::limit($work->description, 100) }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="workModal-{{ $work->id }}" tabindex="-1" aria-labelledby="workModalLabel-{{ $work->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content border-0">
                              <div class="modal-header bg-light">
                                  <h5 class="modal-title fw-bold" id="workModalLabel-{{ $work->id }}">karya dari {{ $work->name }}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <img src="{{ asset('storage/'.$work->image) ?? 'https://dummyimage.com/500x400/ced4da/6c757d' }}" 
                                               class="img-fluid rounded" width="500" height="400"
                                               alt="{{ $work->name }}">
                                      </div>
                                      <div class="col-md-6">
                                          <h4 class="mb-3">{{ $work->name }}</h4>
                                          <div class="d-flex align-items-center mb-3">
                                              <div class="student-avatar me-2">
                                                  <img src="{{ $work->student_avatar ?? 'https://dummyimage.com/40x40/ced4da/6c757d' }}" 
                                                       class="rounded-circle" width="40" height="40" 
                                                       alt="{{ $work->name }}">
                                              </div>
                                              <div>
                                                  <h6 class="fw-bold mb-0">{{ $work->name }}</h6>
                                                  <p class="text-muted small mb-0">{{ $work->student_class ?? 'Siswa' }}</p>
                                              </div>
                                          </div>
                                          
                                          <div class="work-details mt-4">
                                              <h6 class="fw-bold">Deskripsi Karya</h6>
                                              <p>{{ $work->description }}</p>
                                              
                                              @if(!empty($work->created_at))
                                                  <p class="text-muted small mt-3">
                                                      <i class="bi bi-calendar-date me-1"></i> 
                                                      Dibuat pada: {{ \Carbon\Carbon::parse($work->created_at)->format('d F Y') }}
                                                  </p>
                                              @endif
                                              
                                              @if(!empty($work->tags))
                                                  <div class="work-tags mt-3">
                                                      @foreach (explode(',', $work->tags) as $tag)
                                                          <span class="badge bg-light text-dark me-1">#{{ trim($tag) }}</span>
                                                      @endforeach
                                                  </div>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                  @if(!empty($work->project_url))
                                      <a href="{{ $work->project_url }}" class="btn btn-danger" target="_blank">Lihat Proyek</a>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi modals jika diperlukan
        // Dengan Bootstrap 5, modal bisa digunakan tanpa inisialisasi JS tambahan
        // karena sudah menggunakan data-bs-* attributes
        
        // Jika ada kode tambahan, bisa ditambahkan di sini
    });
</script>

</body>

</html>
