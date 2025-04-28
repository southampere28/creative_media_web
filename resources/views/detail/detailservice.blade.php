<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Service Post</title>
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
    <div class="container-fluid py-5 bg-gradient" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center mb-5">
                <div class="service-icon me-3">
                    <i class="bi bi-code-square fs-1 text-danger"></i>
                </div>
                <h1 class="fw-bold mb-0">{{$slug}}</h1>
            </div>
            
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-8 order-lg-2 mb-4">
                    @foreach ($posts as $service)
                        <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
                            @if ($service->image)
                                <div class="position-relative">
                                    <img src="{{ asset('storage/'.$service->image)}}"  class="card-img-top img-fluid" alt="Service image">
                                    <div class="position-absolute top-0 end-0 m-3">
                                        <span class="badge bg-danger px-3 py-2 rounded-pill">Premium Service</span>
                                    </div>
                                </div>
                            @endif
    
                            <div class="card-body p-5">
                                <h2 class="card-title mb-4 text-danger">{{ $service->title }}</h2>
                                
                                <div class="service-meta d-flex align-items-center mb-4">
                                    <div class="service-provider me-4">
                                        <i class="bi bi-person-circle me-1"></i> Provider: <strong>{{ $service->author->name }}</strong>
                                    </div>
                                    <div class="service-date">
                                        <i class="bi bi-calendar3 me-1"></i> Updated: {{ \Carbon\Carbon::parse($service->updated_at)->format('F j, Y') }}
                                    </div>
                                </div>
                                
                                <div class="service-highlights p-4 mb-4 bg-light rounded-3">
                                    <h5 class="mb-3"><i class="bi bi-list-check me-2"></i>Apa yang kamu dapat</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Professional Service</li>
                                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Expert Team</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Quick Turnaround</li>
                                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Satisfaction Guaranteed</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="service-description">
                                    <h5 class="mb-3"><i class="bi bi-info-circle me-2"></i>Description</h5>
                                    <div class="card-text content-section">
                                        {!! $service->content !!}
                                    </div>
                                </div>
    
                                @if (!empty($service->tags))
                                    <div class="service-tags mt-4">
                                        <h5 class="mb-3"><i class="bi bi-tags me-2"></i>Service Tags</h5>
                                        <div>
                                            @foreach (explode(',', $service->tags) as $tag)
                                                <span class="badge bg-light text-dark border me-2 px-3 py-2">#{{ trim($tag) }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="service-cta mt-5 text-center">
                                    <a href="#" class="btn btn-danger btn-lg px-5 py-3 rounded-pill">Request This Service</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Sidebar Column -->
                <div class="col-lg-4 order-lg-1">
                    <div class="card border-0 shadow rounded-4 mb-4 sticky-top" style="top: 20px; z-index: 1;">
                        <div class="card-header bg-danger py-3">
                            <h5 class="mb-0 text-white">Service Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="service-price mb-4 text-center">
                                <span class="fs-6 text-muted">Harga Mulai dari</span>
                                <h3 class="fw-bold text-danger mb-0">Hubungi Lebih Lanjut</h3>
                                <small class="text-muted">Harga bervariasi tergantung kebutuhan</small>
                            </div>
                            
                            <hr>
                            
                            <div class="service-features mb-4">
                                <h6 class="fw-bold mb-3">What's Included:</h6>
                                <ul class="list-group list-group-flush">
                                    @if ($service->service_detail != null)
                                        @foreach(explode(',', $service->service_detail) as $detail)
                                        <li class="list-group-item px-0 d-flex align-items-center">
                                            <i class="bi bi-check2-circle text-success me-2"></i> {{ trim($detail) }}
                                        </li>
                                        @endforeach
                                    @else
                                        <p>Untuk Lebih Jelasnya, Hubungi Kami</p>
                                    @endif
                                </ul>
                            </div>
                            
                            <hr>
                            
                            <div class="service-contact mb-4">
                                <h6 class="fw-bold mb-3">Contact Provider:</h6>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-outline-danger"><i class="bi bi-envelope me-2"></i>Send Message</a>
                                    <a href="#" class="btn btn-outline-dark"><i class="bi bi-telephone me-2"></i>Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</body>

</html>
