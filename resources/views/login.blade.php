@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')

    <body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
            <style>
                body {
                    background-image: url('/media/auth/bg4.jpg');
                }

                [data-theme="dark"] body {
                    background-image: url('media/auth/bg4-dark.jpg');
                }
            </style>

            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <!--begin::Aside-->
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <!--begin::Aside-->
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <!--begin::Logo-->
                        <a href="../../demo1/dist/index.html" class="mb-7">
                            <img alt="Logo" src="{{ asset('media/logos/jdih_logo.png') }}" />
                        </a>
                        <h2 class="text-white fw-normal m-0">Jaringan Dokumentasi dan Informasi Hukum</h2>
                    </div>

                </div>
                <div class="d-flex flex-center w-lg-50 p-10">

                    <div class="card rounded-3 w-md-550px">
                        <div class="card-body p-10 p-lg-20">
                            {{-- Form Login --}}

                            {{-- ! #1 Menambahkan method "post" dan action pada form --}}
                            <form id="" action="/login" method="post" class="form w-100" novalidate="novalidate">
                                {{-- data-kt-redirect-url={{ route('dasbor') }} --}}
                                @csrf
                                {{-- @csrf untuk mengirimkan token --}}
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Masuk</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">JDIH Kabupaten Magetan</div>
                                </div>

                                <div class="fv-row mb-8">
                                    {{-- ! #2 Menambahkan name dan id pada input type --}}
                                    <input type="email" placeholder="Email" autocomplete="off" class="form-control bg-transparent" name="email"
                                        id="email" value="{{ old('email') }}" required />
                                </div>

                                <div class="fv-row mb-3">
                                    {{-- ! #2 Menambahkan name dan id pada input type --}}
                                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent"
                                        name="password" id="password" required />
                                </div>

                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password
                                        ?</a>
                                </div>

                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <span class="indicator-label">Masuk</span>

                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2">
                                            </span>
                                        </span>

                                    </button>
                                </div>
                            </form>

                            {{-- End Form Login --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
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
    @endsection
