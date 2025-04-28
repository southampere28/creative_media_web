<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style-preset.css') }}">

    {{-- Summernote --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

    <style>
        body {
            overflow-x: hidden; /* untuk horizontal */
            overflow-y: auto;   /* atau hidden untuk vertikal jika ingin sembunyi total */
        }
    </style>

</head>

<body>
        <div class="pc-content mt-5">

            <div class="row d-flex justify-content-center">

                <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>{{ isset($edit->id) ? 'Edit Kontak Perusahaan' : 'Tambahkan Kontak Perusahaan' }}</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <form
                                    action="{{ isset($edit->id) ? route('contact.update', $edit->id) : route('contact.store') }}"
                                    enctype="multipart/form-data"
                                    method="POST" class="needs-validation" validate>
                                    @csrf
                                    @if (isset($edit->id))
                                        @method('PUT')
                                    @endif

                                    <div class="card-body">                               


                                        <div class="form-group mb-3">
                                            <label for="validationCustom02" class="form-label">Lokasi Perusahaan</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                name="location" placeholder="Surabaya Timur"
                                                value="{{ isset($edit->id) ? $edit->location : '' }}" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="validationCustom03" class="form-label">Kontak yang Bisa Dihubungi</label>
                                            <input type="text" class="form-control" id="validationCustom03"
                                                name="contact" placeholder="0812-3456-7892, 0812-3456-7777"
                                                value="{{ isset($edit->id) ? $edit->contact : '' }}" required>
                                            <small class="form-text text-muted">
                                                Pisahkan beberapa nomor dengan tanda koma (,). Contoh: 0812-3456-7892, 0812-3456-7777
                                            </small>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        

                                        <div class="form-group mb-3">
                                            <label for="validationCustom03" class="form-label">Alamat Lengkap</label>
                                            <input type="text" class="form-control" id="validationCustom03"
                                                name="address" placeholder="JL. ABCD, Kec. ABCD"
                                                value="{{ isset($edit->id) ? $edit->address : '' }}" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="validationCustom04" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="validationCustom04"
                                                name="email" placeholder="surabaya@creativemedia.id"
                                                value="{{ isset($edit->id) ? $edit->email : '' }}" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>


            <div class="container">

                <div class="row mb-3 justify-content-center">
                    <div class="col-md-9 text-center">
                        {{-- <a href="{{ route('detail.study') }}"><button class="btn btn-primary text-center">Lihat Postingan</button></a> --}}
                        <a href="{{ route('adminview.contact') }}"><button class="btn btn-primary text-center">Lihat
                                Postingan</button></a>
                    </div>
                </div>
            </div>


        </div>



    <script>
        $('#summernote').summernote({
            placeholder: 'Masukkan Isi Konten',
            tabsize: 2,
            height: 500,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    imagePreview.style.maxHeight = '100px'; // Batas tinggi preview
                    imagePreview.style.objectFit = 'contain'; // Biar tidak melar
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>
