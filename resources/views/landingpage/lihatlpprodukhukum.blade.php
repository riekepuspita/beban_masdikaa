@extends('layout.app')

@section('title')
    Lihat Landing Page Produk Hukum
@endsection

@section('content')

    <body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <div class="mb-0" id="beranda">
                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                    style="background-image: url('/media/svg/illustrations/landing.svg')">
                    <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center flex-equal">
                                    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                        id="kt_landing_menu_toggle">
                                        <span class="svg-icon svg-icon-2hx">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                    <a href="../../demo1/dist/landing.html">
                                        <img alt="Logo" src="{{ asset('media/logos/jdih_logo.png') }}"
                                            class="logo-default h-100px h-lg-150px" />
                                        <img alt="Logo" src="{{ asset('media/logos/jdih_logo.png') }}"
                                            class="logo-sticky h-100px h-lg-150px" />
                                    </a>
                                </div>
                                <div class="d-lg-block" id="kt_header_nav_wrapper">
                                    <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                        data-kt-drawer-name="landing-menu"
                                        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                        data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                            id="kt_landing_menu">
                                            <div class="menu-item">
                                                <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="beranda"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Profil"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Profil</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#ProdukHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Produk
                                                    Hukum</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#InformasiHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Informasi
                                                    Hukum</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#KegiatanHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kegiatan
                                                    Hukum</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Faq"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Faq</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Kontak"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-equal text-end ms-1">
                                    <a href="{{ route('login') }}" class="btn btn-success">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                        <h1>
                            <span style="color: white;">{{ $data->judul }}</span>
                        </h1>
                    </div>
                </div>
                <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-sm-n10">
                <div class="mt-20 mb-n20 position-relative z-index-2">
                    <div class="container">
                        <div class="card mb-5 mb-xl-8">
                            <div class="card-header border-0 pt-5">
                                <div class="container mt-3">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <ul id="saveform_errList"></ul>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td width="40%">Tahun</td>
                                                        <td>{{ $data->tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipe Dokumen</td>
                                                        <td>{{ $data->relasi_id_tipe->nama_tipe }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tag</td>
                                                        <td>{{ $data->relasi_id_tag->nama_tag }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Judul</td>
                                                        <td>{{ $data->judul }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>T.E.U Badan/ Pengarang</td>
                                                        <td>{{ $data->badan_pengarang }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Peraturan</td>
                                                        <td>{{ $data->no_peraturan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Panggil</td>
                                                        <td>{{ $data->no_panggil }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis/ Bentuk Perturan</td>
                                                        <td>{{ $data->jenis_bentuk_peraturan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Singkatan Jenis/ Bentuk Peraturan</td>
                                                        <td>{{ $data->singkatan_jenis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cetakan Edisi</td>
                                                        <td>{{ $data->cetakan_edisi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Terbit</td>
                                                        <td>{{ $data->tempat_terbit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penerbit</td>
                                                        <td>{{ $data->penerbit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Penetapan</td>
                                                        <td>{{ $data->tanggal_penetapan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi Fisik</td>
                                                        <td>{{ $data->deskripsi_fisik }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sumber</td>
                                                        <td>{{ $data->sumber }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subjek</td>
                                                        <td>{{ $data->subjek }}</td>
                                                    <tr>
                                                        <td>ISBN</td>
                                                        <td>{{ $data->isbn }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Status</td>
                                                        <td>{{ $data->relasi_id_status->status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bahasa</td>
                                                        <td>{{ $data->bahasa }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td>{{ $data->lokasi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Abstraksi</td>
                                                        <td>{{ $data->abstraksi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Catatan</td>
                                                        <td>{{ $data->catatan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Peraturan</td>
                                                        <td><a href="/upload/{{ $data->file_peraturan }}"
                                                                class="btn btn-primary">Lihat</a>
                                                            <a href="/upload/{{ $data->file_peraturan }}"
                                                                class="btn btn-primary"download>Download</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>File Abstraksi</td>
                                                        <td><a href="/upload/{{ $data->file_abstraksi }}"
                                                                class="btn btn-primary">Lihat</a>
                                                            <a href="/upload/{{ $data->file_abstraksi }}"
                                                                class="btn btn-primary"download>Download</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
            <div class="mb-0">
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <div class="landing-dark-bg pt-20">
                    <div class="container">
                        <div class="row py-10 py-lg-20">
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <div class="rounded landing-dark-border p-9 mb-10">
                                    <h2 class="text-white">Lokasi</h2>
                                    <span class="fw-normal fs-4 text-gray-700"><iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63268.547042251244!2d111.26932904664623!3d-7.652560444976269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79922da09b91f7%3A0xfbda3bb4e910956e!2sKantor%20Bupati%20Magetan!5e0!3m2!1sid!2sid!4v1695781485485!5m2!1sid!2sid"
                                            width="540" height="300" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <a href="https://keenthemes.com/support"
                                            class="text-white opacity-50 text-hover-primary"></a></span>
                                </div>
                            </div>
                            <div class="col-lg-6 ps-lg-16">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex fw-semibold flex-column me-20">
                                        <h4 class="fw-bold text-gray-400 mb-6">Tautan Lainnya</h4>
                                        <a href="https://www.dokumjdih.jatimprov.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Prov. Jatim</a>
                                        <a href="http://jdih-prokum.magetan.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Kab.
                                            Magetan</a>
                                        <a href="https://jdihn.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIHN</a>
                                        <a href="http://jdih.kemendagri.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Kemendagri</a>
                                        <a href="https://dprd.magetan.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Sekwan</a>
                                    </div>
                                    <div class="d-flex fw-semibold flex-column ms-lg-20">
                                        <h4 class="fw-bold text-gray-400 mb-6">Narahubung</h4>
                                        <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                            <img src="{{ asset('/media/svg/brand-logos/instagram-2-1.svg') }}"
                                                class="h-20px me-2" alt="" />
                                            <span
                                                class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                        </a>
                                        <span class="text-white opacity-50 text-hover-primary fs-5"
                                            style="margin-left: 27px">hukum.setda@magetan.go.id</span>
                                        <br>
                                        <span class="text-white opacity-50 text-hover-primary fs-5"
                                            style="margin-left: 27px">(0351) 894480 - 895054 ext.249-250</span>
                                        <br>
                                        <span class="text-white opacity-50 text-hover-primary fs-5"
                                            style="margin-left: 27px">(0351) 894619 FAX</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="landing-dark-separator"></div>
                    <div class="container">
                        <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                            <div class="d-flex align-items-center order-2 order-md-1">
                                <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                    href="https://keenthemes.com">Copyright &copy; Dinas Komunikasi dan Informatika
                                    Pemerintah Kabupaten Magetan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <span class="svg-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                            transform="rotate(90 13 6)" fill="currentColor" />
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="currentColor" />
                    </svg>
                </span>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                        transform="rotate(90 13 6)" fill="currentColor" />
                    <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor" />
                </svg>
            </span>
        </div>
        <script>
            var hostUrl = "assets/";
        </script>
        <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
        <script src="{{ asset('/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
        <script src="{{ asset('/js/custom/landing.js') }}"></script>
        <script src="{{ asset('/js/custom/pages/pricing/general.js') }}"></script>
    @endsection


    @section('script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>

        <script>
            $(document).ready(function() {
                $('#myDataTable').DataTable();
            });
        </script>

        <script>
            var table = $("#kt_datatable_dom_positioning").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endsection
