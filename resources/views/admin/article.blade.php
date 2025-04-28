<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>admin-Artikel</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords"
        content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets_admin/images/favicon.svg') }}" type="image/x-icon">
    <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets_admin/fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets_admin/fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets_admin/fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets_admin/fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style-preset.css') }}">

    <!-- icon bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<!-- Flash Messages -->
@if (session('success'))
    <div class="toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 mb-4 me-4" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1050;">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="toast align-items-center text-white bg-danger border-0 position-fixed bottom-0 end-0 mb-4 me-4" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1050;">
        <div class="d-flex">
            <div class="toast-body">
                {{ session('error') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif


<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <x-navbar-admin></x-navbar-admin>
    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <x-header-admin></x-header-admin>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <x-breadcrumb-admin></x-breadcrumb-admin>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ link-button ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Daftar Artikel</h2>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                
                               
                                <!-- Search and Add button container -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <!-- Search input with icon -->
                                
                                    <div class="d-flex align-items-center gap-2">
                                        <input type="text" id="myInput" class="form-control pl-5" placeholder="Search for names..." onkeyup="myFunction()">
                                        <i class="fas fa-search"></i>
                                    </div>
                                
                                    <!-- Add button with icon -->
                                    <a href="{{route('form.article')}}" class="btn btn-primary d-flex text-align-center gap-2">
                                        <i class="fas fa-plus"></i>
                                        <span>Tambahkan Data</span>
                                    </a>
                                </div>
                                
                                <table id="tableArticle" class="table table-striped table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Deskripsi</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $index => $article)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>
                                                    @if ($article->image)
                                                        <img src="{{ asset('storage/'.$article->image) }}" alt="Image" width="50">
                                                    @else
                                                        <img src="https://dummyimage.com/50x50/162978/ffffff"
                                                            alt="Image" width="50">
                                                    @endif
                                                </td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->description }}</td>
                                                <td>{{ $article->author->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($article->created_at)->format('F j, Y') }}
                                                </td>
                                                <td class="align-middle text-center">
                                                  <div class="d-inline-flex gap-1">
                                                      <a href="{{ route('article.edit', $article->id) }}"
                                                          class="btn btn-sm btn-outline-primary" title="Edit">
                                                          <i class="bi bi-pencil-square"></i>
                                                      </a>
                                              
                                                      <form action="{{ route('article.destroy', $article->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Yakin ingin menghapus post ini?')">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="btn btn-sm btn-outline-danger"
                                                              title="Delete">
                                                              <i class="bi bi-trash"></i>
                                                          </button>
                                                      </form>
                                                  </div>
                                              </td>
                                              
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
                                    {{-- {{ $posts->links() }} --}}
                                    pagination here
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ link-button ] end -->
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <x-footer-admin></x-footer-admin>

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('assets_admin/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('assets_admin/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('assets_admin/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugins/feather.min.js') }}"></script>





    <script>
        layout_change('light');
    </script>




    <script>
        change_box_container('false');
    </script>



    <script>
        layout_rtl_change('false');
    </script>


    <script>
        preset_change("preset-1");
    </script>


    <script>
        font_change("Public-Sans");
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, {
                autohide: true,  // Automatically hide after a few seconds
                delay: 3000      // Toast will disappear after 3 seconds
            });
        });

        // Show the toast
        toastList.forEach(function(toast) {
            toast.show();
        });
    });

    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tableArticle");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }
        }
        }
</script>


</body>
<!-- [Body] end -->

</html>
