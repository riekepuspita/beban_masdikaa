@extends('layout.app')

@section('title')
    Tambah Produk Hukum
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
                                <div class="my-4"> <!-- Penambahan jarak atas -->
                                    <div
                                        class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ms-10 mb-4">
                                        <h1
                                            class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                            Tambah Produk Hukum</h1>
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                            <li class="breadcrumb-item text-muted">
                                                <a href="../../demo1/dist/index.html"
                                                    class="text-muted text-hover-primary">Dasbor</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted"> Produk Hukum</li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">Tambah Produk Hukum</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                        <div class="card mb-5 mb-xl-8">
                                            <div class="card-header border-0 pt-5">
                                                <div class="container mt-3">
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                            <ul id="saveform_errList"></ul>
                                                            <form>
                                                                <div class="mb-3 row">
                                                                    <div class="col-md-12">
                                                                        <div class="d-flex justify-content-end">
                                                                            <a href="/produkhukum"
                                                                             class="btn btn-warning">Kembali<
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </form>
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
        function buttonfileperaturan() {
            document.getElementById('fileperaturan').click();
            document.getElementById('pilihfile1').classList.add('clicked');
        }

        document.getElementById('fileperaturan').addEventListener('change', function() {
            const selectedFile = this.files[0];
            if (selectedFile) {
                console.log('File selected:', selectedFile.name);
            }
        });

        function buttonfileabstraksi() {
            document.getElementById('fileabstraksi').click();
            document.getElementById('pilihfile2').classList.add('clicked');
        }

        document.getElementById('fileabstraksi').addEventListener('change', function() {
            const selectedFile = this.files[0];
            if (selectedFile) {
                console.log('File selected:', selectedFile.name);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.add_produkhukum', function(e) {
                e.preventDefault();


                var data = {
                    'id_tahun': $('#sel0').val(),
                    'id_tipe': $('#sel1').val(),
                    'judul': $('#judul').val(),
                    'badan_pengarang': $('#teu').val(),
                    'no_peraturan': $('#noprt').val(),
                    'no_panggil': $('#nopgl').val(),
                    'jenis_bentuk_peraturan': $('#jenis').val(),
                    'singkatan_jenis': $('#sjns').val(),
                    'cetakan_edisi': $('#ctk').val(),
                    'tempat_terbit': $('#tempatterbit').val(),
                    'penerbit': $('#penerbit').val(),
                    'tanggal_penetapan': $('#tanggalpenetapan').val(),
                    'deskripsi_fisik': $('#deskripsi').val(),
                    'sumber': $('#sumber').val(),
                    'subjek': $('#subjek').val(),
                    'isbn': $('#isbn').val(),
                    'id_status': $('#sel2').val(),
                    'bahasa': $('#bahasa').val(),
                    'lokasi': $('#lokasi').val(),
                    'abstraksi': $('#abstraksi').val(),
                    'catatan': $('#catatan').val(),
                    'file_peraturan': $('#fileperaturan').val(),
                    'file_abstraksi': $('#fileabstraksi').val(),

                }
                // alert(data)
                // console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: "/produkhukum/add",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 400) {
                            $('#saveform_errList').html("");
                            $('#saveform_errList').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_values) {
                                $('#saveform_errList').append('<li>' + err_values +
                                    '</li>');
                            });
                        } else {
                            $('#saveform_errList').html("");
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            $('#AddSptLemburModal').modal('hide');
                            $('#AddSptLemburModal').find('input').val("");
                            window.location.href = '/produkhukum';


                        }
                    }
                });


            });

        });
    </script>
@endsection
