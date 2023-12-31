@extends('layout.app')

@section('title')
     FAQ
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
                                            <h1
                                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                                 FAQ</h1>
                                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                <li class="breadcrumb-item text-muted">
                                                    <a href="../../demo1/dist/index.html"
                                                        class="text-muted text-hover-primary">Dasbor</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <li class="breadcrumb-item text-muted">FAQ Hukum</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-select" id="sel1" name="sellist1">
                                                <option value=""selected disabled hidden>Tipe Kegiatan
                                                </option>
                                                <option> Sosialisasi Produk Hukum </option>
                                                <option> Konsultasi Publik </option>
                                                <option> Pembinaan / Penyuluhan </option>
                                                <option> Rapat</option>
                                                <option> Lain - lain </option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">

                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-trigger="hover" title="Klik untuk tambah FAQ">
                                                    <a href="{{ route('menu.tambahfaq') }}"
                                                        class="btn btn-sm btn-light btn-primary">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11.364" y="20.364"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16"
                                                                    height="2" rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        FAQ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                        <div class="card mb-5 mb-xl-8">
                                            <div class="card-body py-3">
                                                <div class="table-responsive">
                                                    <table id="kt_datatable_dom_positioning"
                                                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded ">
                                                        <thead>
                                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                                <th>PERTANYAAN</th>
                                                                <th>JAWABAN</th>
                                                                <th>STATUS</th>
                                                                <th>AKSI</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
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
        $("#kt_datatable_dom_positioning").DataTable({
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
