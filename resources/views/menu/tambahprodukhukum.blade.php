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
                                                                    <label for="sel1"
                                                                        class="col-md-4 col-form-label">Tahun</label>
                                                                    <div class="col-md-8">
                                                                        <select class="form-select" id="sel0"
                                                                            name="sellist0">
                                                                            <option value="" selected disabled hidden>
                                                                                -- Pilih Tahun --</option>
                                                                            @php
                                                                                $startYear = 2023;
                                                                                $endYear = $startYear + 10; // Tahun terakhir yang ingin ditampilkan
                                                                            @endphp
                                                                            @for ($year = $startYear; $year <= $endYear; $year++)
                                                                                <option value="{{ $year }}">
                                                                                    {{ $year }}
                                                                                </option>
                                                                            @endfor
                                                                        </select>
                                                                    </div>


                                                                </div>

                                                                <div class="mb-3 row">
                                                                    <label for="sel1"
                                                                        class="col-md-4 col-form-label">Tipe
                                                                        Dokumen</label>
                                                                    <div class="col-md-8">
                                                                        <select class="form-select" id="sel1"
                                                                            name="sellist1">
                                                                            <option value=""selected disabled hidden>
                                                                                --
                                                                                Pilih
                                                                                Tipe Dokumen --</option>
                                                                            @foreach ($tipe_dokumen as $tipe_dokumen)
                                                                                <option
                                                                                    value="{{ $tipe_dokumen->id_tipe }}">
                                                                                    {{ $tipe_dokumen->nama_tipe }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 row">
                                                                    <label for="sel2"
                                                                        class="col-md-4 col-form-label">Tag</label>
                                                                    <div class="col-md-8">
                                                                        <select class="form-select" id="sel3"
                                                                            name="sellist3">
                                                                            <option value=""selected disabled hidden>
                                                                                -- Pilih Tag --</option>
                                                                            @foreach ($tag_src_produkhukum as $tag_src_produkhukum)
                                                                                <option
                                                                                    value="{{ $tag_src_produkhukum->id_tag }}">
                                                                                    {{ $tag_src_produkhukum->nama_tag }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 mt-3">

                                                                    <div class="mb-3 row">
                                                                        <label for="judul"
                                                                            class="col-md-4 col-form-label">Judul</label>
                                                                        <div class="col-md-8">
                                                                            <textarea class="form-control" id="judul" name="judul" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="teu"
                                                                            class="col-md-4 col-form-label">T.E.U
                                                                            Badan/Pengarang</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="teu" name="teu">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label class="col-md-4 col-form-label">No.
                                                                            Peraturan</label>
                                                                        <div class="col-md-8">
                                                                            <input class="form-control" id="noprt"
                                                                                name="noprt" pattern="[0-9]+" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="nopgl"
                                                                            class="col-md-4 col-form-label">No.
                                                                            Panggil</label>
                                                                        <div class="col-md-8">
                                                                            <input type="nopgl" class="form-control"
                                                                                id="nopgl" name="nopgl">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="jenis"
                                                                            class="col-md-4 col-form-label">Jenis/
                                                                            Bentuk
                                                                            Peraturan</label>
                                                                        <div class="col-md-8">
                                                                            <input type="jenis" class="form-control"
                                                                                id="jenis" name="jenis">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="sjns"
                                                                            class="col-md-4 col-form-label">Singkatan
                                                                            Jenis/
                                                                            Bentuk Peraturan</label>
                                                                        <div class="col-md-8">
                                                                            <input type="sjns" class="form-control"
                                                                                id="sjns" name="sjns">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Cetakan
                                                                            Edisi</label>
                                                                        <div class="col-md-8">
                                                                            <input type="ctk" class="form-control"
                                                                                id="ctk" name="ctk">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Tempat
                                                                            Terbit</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="tempatterbit" name="tempatterbit">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Penerbit</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="penerbit" name="penerbit">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Tanggal
                                                                            Penetapan</label>
                                                                        <div class="col-md-8">
                                                                            <input type="date" class="form-control"
                                                                                id="tanggalpenetapan"
                                                                                name="tanggalpenetapan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="judul"
                                                                            class="col-md-4 col-form-label">Deskripsi
                                                                            Fisik</label>
                                                                        <div class="col-md-8">
                                                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Sumber</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="sumber" name="sumber">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Subjek</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="subjek" name="subjek">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">ISBN</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="isbn" name="isbn">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="sel1"
                                                                            class="col-md-4 col-form-label">Status</label>
                                                                        <div class="col-md-8">
                                                                            <select class="form-select" id="sel2"
                                                                                name="sellist2">
                                                                                <option value=""selected disabled
                                                                                    hidden>
                                                                                    -- Pilih Status --</option>
                                                                                @foreach ($status as $status)
                                                                                    <option
                                                                                        value="{{ $status->id_status }}">
                                                                                        {{ $status->status }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Bahasa</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="bahasa" name="bahasa">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">Lokasi</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control"
                                                                                id="lokasi" name="lokasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="judul"
                                                                            class="col-md-4 col-form-label">Abstraksi</label>
                                                                        <div class="col-md-8">
                                                                            <textarea class="form-control" id="abstraksi" name="abstraksi" rows="4"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3 row">
                                                                        <label for="c"
                                                                            class="col-md-4 col-form-label">Catatan</label>
                                                                        <div class="col-md-8">
                                                                            <textarea class="form-control" id="catatan" name="catatan" rows="4"></textarea>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <form action="{{ route('upload') }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf --}}
                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">File
                                                                            Peraturan</label>
                                                                        <div class="col-md-5 d-flex align-items-center">
                                                                            <input type="file" id="fileperaturan"
                                                                                name="fileperaturan" accept=".pdf">

                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 row">
                                                                        <label for="ctk"
                                                                            class="col-md-4 col-form-label">File
                                                                            Abstraksi</label>
                                                                        <div class="col-md-5 d-flex align-items-center">
                                                                            <input type="file" id="fileabstraksi"
                                                                                name="fileabstraksi" accept=".pdf">

                                                                        </div>
                                                                    </div>



                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="button"
                                                                            class="btn btn-success me-3 add_produkhukum">Simpan</button>

                                                                        <a href="/produkhukum"
                                                                            class="btn btn-danger">Batal</a>
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

        function buttonfileupload() {
            document.getElementById('csv_file').click();
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
                var formData = new FormData();
                formData.append('tahun', $('#sel0').val());
                formData.append('id_tipe', $('#sel1').val());
                formData.append('id_tag', $('#sel3').val());
                formData.append('judul', $('#judul').val());
                formData.append('badan_pengarang', $('#teu').val());
                formData.append('no_peraturan', $('#noprt').val());
                formData.append('no_panggil', $('#nopgl').val());
                formData.append('jenis_bentuk_peraturan', $('#jenis').val());
                formData.append('singkatan_jenis', $('#sjns').val());
                formData.append('cetakan_edisi', $('#ctk').val());
                formData.append('tempat_terbit', $('#tempatterbit').val());
                formData.append('penerbit', $('#penerbit').val());
                formData.append('tanggal_penetapan', $('#tanggalpenetapan').val());
                formData.append('deskripsi_fisik', $('#deskripsi').val());
                formData.append('sumber', $('#sumber').val());
                formData.append('subjek', $('#subjek').val());
                formData.append('isbn', $('#isbn').val());
                formData.append('id_status', $('#sel2').val());
                formData.append('bahasa', $('#bahasa').val());
                formData.append('lokasi', $('#lokasi').val());
                formData.append('abstraksi', $('#abstraksi').val());
                formData.append('catatan', $('#catatan').val());
                formData.append('file_peraturan', $('#fileperaturan')[0].files[0]);
                formData.append('file_abstraksi', $('#fileabstraksi')[0].files[0]);
                // alert(data)
                // console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: "{{ route('add_produkhukum') }}",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 400) {
                            $('#saveform_errList').html("");
                            $('#saveform_errList').addClass('alert alert-danger ms-3');
                            $('#saveform_errList').append('<li>' + response.message + '</li>');
                            $.each(response.errors, function(key, err_values) {
                                $('#saveform_errList').append('<li>' + err_values +
                                    '</li>');
                            });
                        } else {
                            $('#saveform_errList').html("");
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            window.location.href = "{{ route('menu.produkhukum') }}";


                        }
                    }
                });


            });

        });
    </script>
@endsection
