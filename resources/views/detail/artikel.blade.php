<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
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

        .article-card {
            transition: all 0.3s ease;
            border-left: 4px solid #dc3545;
        }
        
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }
        
        .article-img {
            object-fit: cover;
            height: 100%;
            transition: transform 0.5s ease;
        }
        
        .article-card:hover .article-img {
            transform: scale(1.05);
        }
        
        .article-card:hover .article-title {
            color: #dc3545;
        }

    </style>

</head>

<body>
    <x-navheader></x-navheader>
    
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold mb-2">Artikel</h2>
                <p class="text-muted">Berikut adalah artikel dan berita terkait yang dapat anda baca</p>
                <div class="divider mx-auto my-3" style="width: 60px; height: 3px; background-color: #dc3545;">
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Contoh artikel 1 - format horizontal -->
            @foreach ($posts as $post)
            
            
            <div class="col-12">
                <div class="article-card card shadow-sm h-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="overflow-hidden h-100">
                                <img src="{{asset('storage/'.$post->image)}}" class="article-img img-fluid h-100 w-100" alt="Judul Artikel 1">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center text-muted small mb-2">
                                    <span class="me-3"><i class="bi bi-calendar3 me-1"></i>{{\Carbon\Carbon::parse($post->created_at)->format('F j, Y')}}</span>
                                    <span class="me-3"><i class="bi bi-person me-1"></i>Creative Media Team</span>
                                </div>
                                <h3 class="article-title fw-bold">{{$post->title}}</h3>
                                <p class="text-muted">{{$post->description}}</p>
                                <div class="mt-3">
                                    <span class="badge bg-light text-danger me-2">#pendidikan</span>
                                    <span class="badge bg-light text-danger me-2">#digital</span>
                                    <span class="badge bg-light text-danger">#pembelajaran</span>
                                </div>
                                <div class="mt-3">
                                    <a href="{{route('detail.article', $post->id)}}" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-book me-1"></i>Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
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
