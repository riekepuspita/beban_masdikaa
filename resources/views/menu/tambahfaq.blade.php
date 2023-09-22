@extends('layout.app')

@section('title')
    Tambah FAQ
@endsection

@section('head')
    <script src="{{ asset('plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
@endsection

@section('content')
    <div id="layout-wrapper">
        @include('layout.header')
        @include('layout.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <a href="{{ route('dasbor') }}"></a>
                    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                            <div class="d-flex flex-column flex-column-fluid">
                                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                    <div id="kt_app_toolbar_container"
                                        class="app-container container-xxl d-flex flex-stack">
                                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div
                                        class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ms-10 mb-4">
                                        <h1
                                            class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                            Tambah FAQ</h1>
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                            <li class="breadcrumb-item text-muted">
                                                <a href="../../demo1/dist/index.html"
                                                    class="text-muted text-hover-primary">Dasbor</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">FAQ</li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">Tambah FAQ</li>
                                        </ul>
                                    </div>
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                        <div class="card mb-5 mb-xl-8">
                                            <div class="card-header border-0 pt-5">
                                                <div class="container mt-3">
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                        
                                                            <div class="mb-3 mt-3">
                                                                <div class="mb-3 row">
                                                                    <label for="pertanyaan"
                                                                        class="col-md-3 col-form-label">Pertanyaan</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="jawaban"
                                                                        class="col-md-3 col-form-label">Jawaban</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" id="jawaban" name="jawaban" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="sel1"
                                                                        class="col-md-3 col-form-label">Status</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-select" id="sel1"
                                                                            name="sellist1">
                                                                            <option value=""selected disabled hidden>
                                                                                -- Pilih Status --</option>
                                                                            <option> Draft </option>
                                                                            <option> Terbit </option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="d-flex justify-content-end">

                                                                    <button type="button"
                                                                        class="btn btn-success me-3   ">Simpan</button>
                                                                    <button type="button"
                                                                        class="btn btn-danger ms-3">Batal</button>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="kt_app_footer" class="app-footer">
                                        <div
                                            class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                            <div class="text-dark order-2 order-md-1">
                                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                                <a href="https://keenthemes.com" target="_blank"
                                                    class="text-gray-800 text-hover-primary">JDIH</a>
                                            </div>
                                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                                <li class="menu-item">
                                                    <a href="https://1.envato.market/EA4JP" target="_blank"
                                                        class="menu-link px-2">ARP</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        function buttonfiletambah() {
            document.getElementById('fileInput').click();
            document.getElementById('pilihfile2').classList.add('clicked');
        }

        document.getElementById('fileInput').addEventListener('change', function() {
            const selectedFile = this.files[0];
            if (selectedFile) {
                console.log('File selected:', selectedFile.name);
                // Lakukan apa pun yang ingin Anda lakukan dengan file terpilih di sini
            }
        });
    </script>
@endsection
