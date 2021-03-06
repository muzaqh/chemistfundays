@extends('layouts.backendpeserta')

@section('content')
    <!-- Hero -->
    <div class="bg-body">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h4 font-w400 mt-0 mb-0 mb-sm-2">Selamat datang (nanti tolong masukin nama user)</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"></li>Chemist Fun Days
                        <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-3">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title row justify-content-center">Status Berkas</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            status berkas yang telah kamu upload
                        </p>
                        <p>
                            <strong>Terferivikasi</strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title row justify-content-center">Jadwal Pelaksanan Ujian</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            Ujian akan dilaksanakan pada ....
                        </p>
                        <span class="flex row justify-content-center">
                            <a class="btn btn-primary px-3 py-2" href="javascript:void(0)">
                                Mulai ujian
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title row justify-content-center">Progres</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            diisi dengan progres dia selama berada diperlombaan
                        </p>
                        <p>
                            <strong>progres peserta (mendaftar -> terferivikasi -> ujian -> ucapan selamat)</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END Page Content -->
@endsection
