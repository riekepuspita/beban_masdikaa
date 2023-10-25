@extends('layout.app')

@section('title')
    Dasbor
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
                                                Dasbor</h1>
                                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                                <li class="breadcrumb-item text-muted">
                                                    <a href="../../demo1/dist/index.html"
                                                        class="text-muted text-hover-primary">Home</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                                </li>
                                                <li class="breadcrumb-item text-muted">Widgets</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <div id="kt_app_content_container" class="app-container container-xxl">
                                        <div class="card mb-5 mb-xl-8">
                                            
                                            <div class="card-header border-0 pt-5">        
                                            </div>
                                            <div class="card-body py-3" style="height: 350px;"> <!-- Sesuaikan dengan tinggi yang Anda inginkan -->

                                                <div class="table-responsive">
                                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                    </table>
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
            @include('layout.footer')
        </div>
    </div>
@endsection
