<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Study Post</title>
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
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .blog-card {
            transition: box-shadow 0.3s;
        }

        .blog-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .post-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .post-tags span {
            margin-right: 5px;
            font-size: 0.8rem;
        }

        .read-more-btn {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <x-navheader></x-navheader>
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <h1 class="mb-4 text-center fw-bold">📝 {{ $posts->first()->title }}</h1>


            
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-8 mb-4">
                    @foreach ($posts as $study)
                        <div class="card blog-card border-0 shadow rounded-3 overflow-hidden mb-5">
                            @if ($study->image)
                                <div class="position-relative">
                                    <img src="{{ asset('storage/'.$study->image) }}" class="card-img-top img-fluid" alt="Post image">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h3 class="card-title text-white mb-0">{{ $study->title }}</h3>
                                    </div>
                                </div>
                            @else
                                <div class="card-header bg-primary text-white py-3">
                                    <h3 class="card-title mb-0">{{ $study->title }}</h3>
                                </div>
                            @endif
    
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="post-meta mb-0">
                                        <i class="bi bi-person-fill me-1"></i> <strong>{{ $study->author->name }}</strong> | 
                                        <i class="bi bi-calendar3 ms-2 me-1"></i> {{ \Carbon\Carbon::parse($study->created_at)->format('F j, Y') }}
                                    </p>
                                </div>
                                
                                <div class="card-text content-section">
                                    <p>{{$study->description}}</p>
                                </div>

                                <div class="card-text content-section">
                                    {!! $study->content !!}
                                </div>
    
                                @if (!empty($study->tags))
                                    <div class="post-tags mt-4">
                                        @foreach (explode(',', $study->tags) as $tag)
                                            <span class="badge rounded-pill bg-secondary me-2 px-3 py-2">#{{ trim($tag) }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow rounded-3 mb-4">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0" style="color: white">Tentang Penulis</h5>
                        </div>
                        <div class="card-body">
                            @if (!empty($posts->first()))
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ $posts->first()->author->avatar ?? 'https://dummyimage.com/60x60/7c58a6/ffffff.png' }}" class="rounded-circle" width="60" alt="Author avatar">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="fw-bold mb-1">{{ $posts->first()->author->name }}</h6>
                                        <p class="text-muted small mb-0">{{ $posts->first()->author->role ?? 'Content Creator' }}</p>
                                    </div>
                                </div>
                                <p class="mb-0">{{ $posts->first()->author->bio ?? 'Spesialis dalam berbagai bidang studi dan berbagi pengetahuan melalui artikel-artikel berkualitas.' }}</p>
                            @else
                                <p>Informasi penulis tidak tersedia.</p>
                            @endif
                        </div>
                    </div>
    
                    <div class="card border-0 shadow rounded-3 mb-4">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0" style="color: white">Artikel Terkait</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($posts as $relatedStudy)
                                    <li class="list-group-item px-0">
                                        <a href="#" class="text-decoration-none">{{ $relatedStudy->title }}</a>
                                        <p class="text-muted small mb-0">{{ \Carbon\Carbon::parse($relatedStudy->created_at)->format('M j, Y') }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
