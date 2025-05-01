<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
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

        .card {
            border-radius: 10px;
            border-top: 4px solid #dc3545; /* Menambahkan border atas merah dengan ketebalan 8px */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Untuk memberi efek bayangan pada card */
        }

        .card-body {
            border-radius: 10px;
            border-top: 4px solid #dc3545; /* Menambahkan border atas merah dengan ketebalan 8px */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Untuk memberi efek bayangan pada card */
        }
    </style>

</head>

<body>
    <x-navheader></x-navheader>
    
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-2">Testimoni Siswa</h2>
                    <p class="text-muted">Kata mereka para siswa tentang Creative Media</p>
                    <div class="divider mx-auto my-3" style="width: 60px; height: 3px; background-color: #dc3545;">
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 mx-5 mb-5">
                @foreach ($videotestimoniposts as $testimonial)
                <div class="col">
                    <div class="card shadow-sm p-3">
                        {{-- YouTube Video --}}
                        <div class="ratio ratio-16x9 mb-3">
                            <iframe 
                                src="//www.youtube.com/embed/{{ $testimonial->video }}" 
                                title="Video Testimoni" 
                                frameborder="0" 
                                allowfullscreen>
                            </iframe>
                        </div>
            
                        {{-- Info Pengguna --}}
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                @if ($testimonial->image)
                                <img src="{{ asset('storage/'.$testimonial->image) }}" alt="Foto pengguna" class="rounded-circle"
                                     style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                <img src="https://dummyimage.com/400x400/000/fff" alt="Foto pengguna" class="rounded-circle"
                                     style="width: 60px; height: 60px; object-fit: cover;">
                                @endif
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold text-danger">{{ $testimonial->name }}</h6>
                                <small class="text-muted">student</small>
                            </div>
                        </div>
            
                        {{-- Komentar --}}
                        <p class="card-text">“{{ $testimonial->comment }}”</p>
                    </div>
                </div>
                @endforeach
            </div>
            

            <div class="row mx-3">
                @foreach ($texttestimoniposts as $testimonial)
                {{-- <div class="col-md-3 text-center">
                    <img src="{{ $testimonial->photo_url ?? 'https://via.placeholder.com/100' }}" alt="{{ $testimonial->name }}" class="img-fluid rounded-circle p-3" style="max-width: 100px;">
                </div> --}}
                <div class="col-md-12 mb-4">
                    <div class="card shadow-sm border-0">
                        {{-- <div class="card-body"> --}}
                            <div class="card-body d-flex align-items-center">
                                <div class="me-3">
                                    @if ($testimonial->image)
                                    <img src="{{asset('storage/'.$testimonial->image)}}" alt="profile pengguna" class="rounded-circle"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                    @else
                                    <img src="https://dummyimage.com/400x400/000/fff" alt="profile pengguna" class="rounded-circle"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                @endif
                                </div>
                                <div>
                                    <h5 class="card-title fw-semibold text-danger">{{ $testimonial->name }}</h5>
                                    <p class="card-text text-muted mb-2"><small>student</small></p>
                                    <p class="card-text">“{{ $testimonial->comment }}”</p>
                                </div>
                            </div>
                        {{-- </div> --}}
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
