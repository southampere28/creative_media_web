<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing CMS</title>
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
                        <h2>{{ isset($edit->id) ? 'Edit Testimoni' : 'Tambahkan Testimoni' }}</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <form
                                    action="{{ isset($edit->id) ? route('testimoni.update', $edit->id) : route('testimoni.store') }}"
                                    enctype="multipart/form-data"
                                    method="POST" class="needs-validation" validate>
                                    @csrf
                                    @if (isset($edit->id))
                                        @method('PUT')
                                    @endif

                                    <div class="card-body">

                                        <!-- Input Gambar -->
                                        <div class="form-group mb-3">
                                            <label for="imageInput" class="form-label">Tambahkan Foto Alumni</label>
                                            <input type="file" class="form-control" id="imageInput" name="image" accept="image/*" onchange="previewImage(event)">

                                            {{-- Hidden input: selalu kirimkan old_image walaupun kosong --}}
                                            <input type="hidden" name="old_image" value="{{ $edit->image ?? '' }}">

                                            <div class="mt-3">
                                                @if (isset($edit->image))
                                                    <img src="{{ asset('storage/'.$edit->image) }}" alt="Image" width="100">
                                                @else
                                                    <img id="imagePreview" src="#" alt="Preview Gambar" style="max-width: 100%; max-height: 200px; display: none; border: 1px solid #ddd; padding: 4px; border-radius: 6px;">
                                                @endif
                                            </div>
                                        </div>   

                                        <div class="form-group mb-3">
                                            <label for="validationCustom02" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                name="name" placeholder="Pramudya Putra"
                                                value="{{ isset($edit->id) ? $edit->name : '' }}" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="validationCustom03" class="form-label">Komentar</label>
                                            <textarea class="form-control" id="validationCustom03"
                                                name="comment" placeholder="Ruang yang nyaman dan staff yang ramah, juga pengajar yang kompeten.. suasana belajar juga santai"
                                                rows="5"
                                                required>{{ isset($edit->id) ? $edit->comment : '' }}</textarea>
                                                @error('comment')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="validationCustom01" class="form-label">Tipe Testimoni</label>
                                            <select class="form-select" id="validationCustom01" name="type"
                                                style="height: auto; min-height: 40px; padding-top: 0.5rem; padding-bottom: 0.5rem;"
                                                required>
                                                <option selected disabled value="">Pilih Tipe Testimoni</option>
                                                <option value="message"
                                                    {{ isset($edit->type) && $edit->type == 'message' ? 'selected' : '' }}>
                                                    message</option>
                                                <option value="video"
                                                    {{ isset($edit->type) && $edit->type == 'video' ? 'selected' : '' }}>
                                                    video</option>
                                                <!-- Tambah opsi lain sesuai kebutuhan -->
                                            </select>
                                            <div class="invalid-feedback">
                                                Silakan pilih tipe testimoni terlebih dahulu.
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="validationCustom02" class="form-label">Link Video</label>
                                            <input type="text" class="form-control" id="validationCustom02"
                                                name="video" placeholder="Masukkan Link Video"
                                                value="{{ isset($edit->id) ? $edit->video : '' }}">
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
                        <a href="{{ route('adminview.services') }}"><button class="btn btn-primary text-center">Lihat
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
