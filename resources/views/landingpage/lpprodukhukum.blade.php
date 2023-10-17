@extends('layout.app')

@section('title')
    Landing Page Produk Hukum
@endsection

@section('head')
    <link rel="shortcut icon" href="{{ asset('media/logos/jdih2.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
        class="bg-white position-relative app-blank">

        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <div class="mb-0" id="beranda">
                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                    style="background-image: url('/media/svg/illustrations/landing.svg')">
                    <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <div class="container">
                            <div class="d-flex align-items-center justify-content-between">
                                <!--begin::Logo-->
                                <div class="d-flex align-items-center flex-equal">
                                    <!--begin::Mobile menu toggle-->
                                    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                        id="kt_landing_menu_toggle">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
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
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Mobile menu toggle-->
                                    <!--begin::Logo image-->
                                    <a href="../../demo1/dist/landing.html">
                                        <img alt="Logo" src="{{ asset('media/logos/jdih2.png') }}"
                                            class="logo-default h-100px h-lg-105px" />
                                        <img alt="Logo" src="{{ asset('media/logos/jdih2.png') }}"
                                            class="logo-sticky h-95px h-lg-90px" />
                                    </a>
                                    <!--end::Logo image-->
                                </div>
                                <!--end::Logo-->
                                <!--begin::Menu wrapper-->
                                <div class="d-lg-block" id="kt_header_nav_wrapper">
                                    <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                        data-kt-drawer-name="landing-menu"
                                        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                        data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                        <!--begin::Menu-->
                                        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                            id="kt_landing_menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#Beranda"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Profil"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Profil</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#ProdukHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Produk
                                                    Hukum</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#InformasiHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Informasi
                                                    Hukum</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#KegiatanHukum"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kegiatan
                                                    Hukum</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Faq"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Faq</a>
                                                <!--end::Menu link-->
                                            </div>
                                            <!--end::Menu item-->
                                            <div class="menu-item">
                                                <!--begin::Menu link-->
                                                <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#Kontak"
                                                    data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Kontak</a>
                                                <!--end::Menu link-->
                                            </div>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Menu wrapper-->
                                <!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
                                    <a href="../../demo1/dist/authentication/layouts/basic/sign-in.html"
                                        class="btn btn-success">Sign In</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Landing hero-->
                    <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                        <!--begin::Heading-->
                        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                            <!--begin::Title-->
                            <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15"> Jaringan Dokumentasi dan Informasi
                                Hukum (JDIH)
                                <br />
                                <span
                                    style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                    <span id="kt_landing_hero_text">KABUPATEN MAGETAN</span>
                                </span>
                            </h1>
                            <!--end::Title-->
                            <!--begin::Action-->
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="../../demo1/dist/index.html" class="btn btn-primary">Peraturan Daerah</a>
                            <a class="btn btn-primary ms-3">Peraturan Bupati</a>
                            <a class="btn btn-primary ms-3">Keputusan Bupati</a>
                            <a class="btn btn-primary ms-3">Instruksi Bupati</a>
                            <a class="btn btn-primary ms-3">Peraturan Desa</a>
                            <a class="btn btn-primary ms-3">Peraturan Bersama Bupati</a>
                            <br>
                            <br>
                            <a class="btn btn-primary ms-3">Peraturan Bersama Kepala Desa</a>
                            <a class="btn btn-primary ms-3">Peraturan Kepala Desa</a>
                            <a class="btn btn-primary ms-3">Rancangan Peraturan Bupati</a>
                            <a class="btn btn-primary ms-3">Rancangan Peraturan Daerah</a>
                            <!--end::Action-->
                        </div>
                    </div>
                    <!--end::Landing hero-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Curve bottom-->
                <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve bottom-->
            </div>
            <!--end::Header Section-->

            <!--begin::Statistics Section-->
            <div class="mt-sm-n10">

                <!--begin::Pricing Section-->

                <!--end::Pricing Section-->
                <!--begin::Testimonials Section-->
                <div class="mt-20 mb-n20 position-relative z-index-2">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Heading-->
                        <div class="text-center mb-17">
                            <!--begin::Title-->
                            <div class="card">
                                <div class="card-body p-4" style="background-color: #001f3f; color: #fff;">
                                    <form method="get" id="searchForm" class="mb-0" action="/search">
                                        <div class="row g-6 g-xl-9">
                                            <div class="col-lg-7">
                                                <div class="position-relative">
                                                    <div
                                                        class="position-absolute translate-middle-y top-50 start-0 ms-5 me-3">
                                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                        <span class="svg-icon svg-icon-2hx">
                                                            <i class="bi bi-search"></i>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <input type="text" class="form-control form-control-solid ps-12"
                                                        name="result" value="" placeholder="Search"
                                                        fdprocessedid="eq4xqo">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row">
                                                    <div class="col-6 d-grid">
                                                        <div class="d-flex gap-2">
                                                            <button type="submit" class="btn btn-primary w-125px"
                                                                fdprocessedid="ti1778">Search</button>
                                                            <a id="kt_horizontal_search_advanced_link"
                                                                class="btn btn-secondary w-125px"
                                                                data-bs-toggle="collapse" href="#kt_advanced_search_form"
                                                                aria-expanded="true">
                                                                Adv. Search
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse" id="kt_advanced_search_form">
                                            <div class="separator separator-dashed mt-9 mb-6"></div>
                                            <div class="row g-8 mb-8">

                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                </div>
                                <!--end::Advance form-->
                                </form>
                                @if (isset($produk_hukum) && count($produk_hukum) > 0)
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
                                            @foreach ($produk_hukum as $data)
                                                <tr>
                                                    <td>{{ $data->tahun }}</td>
                                                    <td>{{ $data->relasi_id_tipe->nama_tipe }}</td>
                                                    <td>{{ $data->relasi_id_tag->nama_tag }}</td>
                                                    <td>{{ $data->judul }}</td>
                                                    <td>{{ $data->relasi_id_status->status }}</td>
                                                    <td><a href="hukum/{{ $data->id }}"
                                                            class="btn btn-primary">Lihat</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
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
                    <!--end::Highlight-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Testimonials Section-->
            <!--begin::Footer Section-->
            <div class="mb-0">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="landing-dark-bg pt-20">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row py-10 py-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <!--begin::Block-->
                                <div class="rounded landing-dark-border p-9 mb-10">
                                    <!--begin::Title-->
                                    <h2 class="text-white">Lokasi</h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-normal fs-4 text-gray-700"><iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63268.547042251244!2d111.26932904664623!3d-7.652560444976269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79922da09b91f7%3A0xfbda3bb4e910956e!2sKantor%20Bupati%20Magetan!5e0!3m2!1sid!2sid!4v1695781485485!5m2!1sid!2sid"
                                            width="540" height="300" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        <a href="https://keenthemes.com/support"
                                            class="text-white opacity-50 text-hover-primary"></a></span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->

                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 ps-lg-16">
                                <!--begin::Navs-->
                                <div class="d-flex justify-content-center">
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column me-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-400 mb-6">Tautan Lainnya</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a href="https://www.dokumjdih.jatimprov.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Prov. Jatim</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="http://jdih-prokum.magetan.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Kab.
                                            Magetan</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://jdihn.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIHN</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="http://jdih.kemendagri.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Kemendagri</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://dprd.magetan.go.id/"
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">JDIH Sekwan</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                    </div>
                                    <!--end::Links-->
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column ms-lg-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-400 mb-6">Narahubung</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
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
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Navs-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Separator-->
                    <div class="landing-dark-separator"></div>
                    <!--end::Separator-->
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                            <!--begin::Copyright-->
                            <div class="d-flex align-items-center order-2 order-md-1">
                                <!--begin::Logo-->
                                <a href="../../demo1/dist/landing.html">
                                    <img alt="Logo" src="{{ asset('/media/logos/landing.svg') }}"
                                        class="h-15px h-md-20px" />
                                </a>
                                <!--end::Logo image-->
                                <!--begin::Logo image-->
                                <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1"
                                    href="https://keenthemes.com">Copyright &copy; Dinas Komunikasi dan Informatika
                                    Pemerintah Kabupaten Magetan</span>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Copyright-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Footer Section-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
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
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
        </div>
        <!--end::Root-->
        <!--begin::Engage drawers-->
        <!--begin::Demos drawer-->
        <div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
            data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">
                <!--begin::Header-->
                <div class="card-header" id="kt_engage_demos_header">
                    <h3 class="card-title fw-bold text-gray-700">Demos</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                            id="kt_engage_demos_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body" id="kt_engage_demos_body">
                    <!--begin::Content-->
                    <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                        data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body"
                        data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                        <!--begin::Wrapper-->
                        <div class="mb-0">
                            <!--begin::Heading-->
                            <div class="mb-7">
                                <div class="d-flex flex-stack">
                                    <h3 class="mb-0">Metronic Licenses</h3>
                                    <a href="https://themeforest.net/licenses/standard" class="fw-semibold"
                                        target="_blank">License FAQs</a>
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::License-->
                            <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Regular
                                                License</div>
                                            <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                                        </div>
                                        <div class="fs-7 text-muted">For single end product used by you or one client
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                        <span class="text-dark fs-1 fw-bold">49</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::License-->
                            <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended
                                                License</div>
                                            <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                data-bs-toggle="popover" data-bs-custom-class="popover-inverse"
                                                data-bs-trigger="hover" data-bs-placement="top"
                                                data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                        </div>
                                        <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                        <span class="text-dark fs-1 fw-bold">969</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::License-->
                            <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                <div class="d-flex flex-stack">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom
                                                License</div>
                                        </div>
                                        <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                    </div>
                                    <div class="text-nowrap">
                                        <a href="https://devs.keenthemes.com" class="btn btn-sm btn-success"
                                            target="_blank">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <!--end::License-->
                            <!--begin::Purchase-->
                            <a href="https://1.envato.market/EA4JP" class="btn btn-primary fw-bold mb-15 w-100">Buy
                                Now</a>
                            <!--end::Purchase-->
                            <!--begin::Demos-->
                            <div class="mb-0">
                                <h3 class="fw-bold text-center mb-6">Metronic Demos</h3>
                                <!--begin::Row-->
                                <div class="row g-5">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo1.png" alt="demo') }}"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo1"
                                                    class="btn btn-sm btn-success shadow">Metronic Original</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo2.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo2"
                                                    class="btn btn-sm btn-success shadow">Demo 2</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo3.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo3"
                                                    class="btn btn-sm btn-success shadow">Demo 3</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo4.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo4"
                                                    class="btn btn-sm btn-success shadow">Demo 4</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo5.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo5"
                                                    class="btn btn-sm btn-success shadow">Demo 5</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo6.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo6"
                                                    class="btn btn-sm btn-success shadow">Demo 6</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo7.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo7"
                                                    class="btn btn-sm btn-success shadow">Demo 7</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo8.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo8"
                                                    class="btn btn-sm btn-success shadow">Demo 8</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo9.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo9"
                                                    class="btn btn-sm btn-success shadow">Demo 9</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo10.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo10"
                                                    class="btn btn-sm btn-success shadow">Demo 10</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo11.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo11"
                                                    class="btn btn-sm btn-success shadow">Demo 11</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo12.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo12"
                                                    class="btn btn-sm btn-success shadow">Demo 12</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo13.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo13"
                                                    class="btn btn-sm btn-success shadow">Demo 13</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo14.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo14"
                                                    class="btn btn-sm btn-success shadow">Demo 14</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo15.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo15"
                                                    class="btn btn-sm btn-success shadow">Demo 15</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo16.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo16"
                                                    class="btn btn-sm btn-success shadow">Demo 16</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo17.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo17"
                                                    class="btn btn-sm btn-success shadow">Demo 17</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo18.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo18"
                                                    class="btn btn-sm btn-success shadow">Demo 18</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo19.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo19"
                                                    class="btn btn-sm btn-success shadow">Demo 19</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo20.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo20"
                                                    class="btn btn-sm btn-success shadow">Demo 20</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo21.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo21"
                                                    class="btn btn-sm btn-success shadow">Demo 21</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo22.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo22"
                                                    class="btn btn-sm btn-success shadow">Demo 22</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo23.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo23"
                                                    class="btn btn-sm btn-success shadow">Demo 23</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Demo-->
                                        <div
                                            class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                            <div class="overlay-wrapper">
                                                <img src="{{ asset('/media/demos/demo24.png') }}" alt="demo"
                                                    class="w-100" />
                                            </div>
                                            <div class="overlay-layer bg-dark bg-opacity-10">
                                                <a href="https://preview.keenthemes.com/metronic8/demo24"
                                                    class="btn btn-sm btn-success shadow">Demo 24</a>
                                            </div>
                                        </div>
                                        <!--end::Demo-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Demos-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Demos drawer-->
        <!--begin::Help drawer-->
        <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help"
            data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
            data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end"
            data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
            <!--begin::Card-->
            <div class="card shadow-none rounded-0 w-100">
                <!--begin::Header-->
                <div class="card-header" id="kt_help_header">
                    <h5 class="card-title fw-semibold text-gray-600">Learn & Get Inspired</h5>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body" id="kt_help_body">
                    <!--begin::Content-->
                    <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                        data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                        data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
                        <!--begin::Support-->
                        <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                            <!--begin::Heading-->
                            <h2 class="fw-bold mb-5">Support at
                                <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
                            </h2>
                            <!--end::Heading-->
                            <!--begin::Description-->
                            <div class="fs-5 fw-semibold mb-5">
                                <span class="text-gray-500">Join our developers community to find answer to your question
                                    and help others.</span>
                                <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                            </div>
                            <!--end::Description-->
                            <!--begin::Link-->
                            <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
                                Support</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Support-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Documentation &
                                        Videos</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-7 fs-lg-6">From guides and video tutorials, to
                                        live demos and code examples to get started.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
                                            fill="currentColor" />
                                        <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs//base/utilities"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Plugins &
                                        Components</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-7 fs-lg-6">Check out our 300+ in-house
                                        components and customized 3rd-party plugins.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                                <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                                <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                            fill="currentColor" />
                                        <path
                                            d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a href="https://preview.keenthemes.com/metronic8/layout-builder.html"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Layout Builder</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-7 fs-lg-6">Build your layout, preview it and
                                        export the HTML for server side integration.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
                                <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                            fill="currentColor" />
                                        <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a href="https://devs.keenthemes.com/metronic"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Metronic
                                        Downloads</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-7 fs-lg-6">Download your prefered framework and
                                        demo with one click.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <div class="d-flex align-items-center mb-7">
                            <!--begin::Icon-->
                            <div
                                class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                                <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                                <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Info-->
                            <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column me-2 me-lg-5">
                                    <!--begin::Title-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">What's New ?</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-7 fs-lg-6">Latest features and improvements
                                        added with our users feedback in mind.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-gray-400 svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Help drawer-->
        <!--end::Engage drawers-->
        <!--begin::Engage toolbar-->
        <div
            class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">
            <!--begin::Demos drawer toggle-->
            <button id="kt_engage_demos_toggle"
                class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
                title="Check out 24 more demos" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-dismiss="click" data-bs-trigger="hover">
                <span id="kt_engage_demos_label">Demos</span>
            </button>
            <!--end::Demos drawer toggle-->
            <!--begin::Help drawer toggle-->
            <button id="kt_help_toggle" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
                title="Learn & Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click"
                data-bs-trigger="hover">Help</button>
            <!--end::Help drawer toggle-->
        </div>
        <!--end::Engage toolbar-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
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
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";
        </script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{ asset('/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
        <script src="{{ asset('/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('/js/custom/landing.js') }}"></script>
        <script src="{{ asset('/js/custom/pages/pricing/general.js') }}"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
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
