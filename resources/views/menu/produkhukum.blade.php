@extends('layout.app')

@section('title')
    Produk Hukum
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
                                                Produk Hukum</h1>
                                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                <li class="breadcrumb-item text-muted">
                                                    <a href="../../demo1/dist/index.html"
                                                        class="text-muted text-hover-primary">Dasbor</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <li class="breadcrumb-item text-muted">Produk Hukum</li>
                                            </ul>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">

                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-trigger="hover" title="Klik untuk tambah produk hukum">
                                                    <a href="{{ route('menu.tambahprodukhukum') }}"
                                                        class="btn btn-sm btn-light btn-primary">
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-90 11.364 20.364)"
                                                                    fill="currentColor" />
                                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                                    rx="1" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        Produk Hukum</a>
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
                                                    <div class="col-md-3 offset-md-9">

                                                        <select class="form-select" id="filter" name="filter">
                                                            <option value="semua" selected>
                                                                Semua Tipe Dokumen</option>
                                                            @foreach ($filterph as $filterph)
                                                                <option value="{{ $filterph->nama_tipe }}">
                                                                    {{ $filterph->nama_tipe }} </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <table id="kt_datatable_dom_positioning"
                                                        class="table table-striped table-row-bordered gy-5 gs-7 border rounded ">
                                                        <thead>
                                                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                                <th>TAHUN</th>
                                                                <th>TIPE DOKUMEN</th>
                                                                <th>TAG</th>
                                                                <th>JUDUL</th>
                                                                <th>STATUS</th>
                                                                <th>DETAIL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($produkhukum as $data)
                                                                <tr>
                                                                    <td>{{ $data->tahun }}</td>
                                                                    <td>{{ $data->relasi_id_tipe->nama_tipe }}</td>
                                                                    <td>{{ $data->relasi_id_tag->nama_tag }}</td>
                                                                    <td>{{ $data->judul }}</td>
                                                                    <td>{{ $data->relasi_id_status->status }}</td>
                                                                    <td><a href="produk/{{ $data->id }}"
                                                                            class="btn btn-primary">Lihat</a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
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

        // Filter tipe dokumen
        $('#filter').on('change', function() {
            var selVal = $(this).val();
            if (selVal === 'semua') {
                table.column(1).search('').draw();
            } else {
                table.column(1).search(selVal).draw();
            }
        })

        function filterTable() {
            // Variables
            let dropdown, table, rows, cells, country, filter;
            dropdown = document.getElementById("sel1");
            table = document.getElementById("kt_datatable_dom_positioning");
            rows = table.getElementsByTagName("tr");
            filter = dropdown.value;

            // Loops through rows and hides those with countries that don't match the filter
            for (let row of rows) { // `for...of` loops through the NodeList
                cells = row.getElementsByTagName("td");
                country = cells[1] || null; // gets the 2nd `td` or nothing
                // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
                if (filter === "All" || !country || (filter === country.textContent)) {
                    row.style.display = ""; // shows this row
                } else {
                    row.style.display = "none"; // hides this row
                }
            }
        }
    </script>
@endsection
