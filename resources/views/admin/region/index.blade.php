@extends('layouts.backend')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
    <!-- Notify JS Code -->
    <script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <!-- SweetAlert JS Code -->
    <script src="{{ asset('js/pages/sweetAlert2.js') }}"></script>
    @include('components.flash-message')
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">DataTables Example</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item active" aria-current="page">Plugin</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Info -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{__('Tambah Data')}}</h3>
            </div>
            <div class="block-content">
                <div class="form-group">
                    <form class="input-group" action="{{ isset($region) ? route('regions.update',$region->id) : route('regions.store')}}" method="POST">
                        @csrf
                        @if (isset($region))
                        @method('PUT')
                        @else
                        @method('POST')
                        @endif
                        <input type="name" class="form-control form-control-alt {{ $errors->has('name') ? 'is-invalid' : '' }}" id="for-name" name="name" placeholder="{{__('Regional')}}" value="{{ isset($region->name) ? old('name', $region->name ) : old('name')}}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </form>
                </div>
                
            </div>
        </div>
        <!-- END Info -->

        <!-- Dynamic Table Full -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{__('data Regional')}}</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 70px;">#</th>
                            <th>Region Contest</th>
                            <th style="width: 15%;">Registered</th>
                            <th style="width: 10%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regions as $region)
                            <tr>
                                <td class="text-center"><?= $loop->iteration ?></td>
                                <td class="font-w600">
                                    <a href="javascript:void(0)">{{ $region->name }}</a>
                                </td>
                                <td>
                                    <em class="text-muted">{{ $region->updated_at->diffForHumans()}}</em>
                                </td>
                                <td>
                                    <div class="btn-group">
                                            <button type="button" onclick="location.href='{{route('regions.edit', $region->id)}}'" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" id="{{$region->id}}" class="js-swal-confirm btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        <form action="{{ route('regions.destroy',$region->id)}}" method="POST" id="delete_{{$region->id}}" style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            
                                        </form>
                                    </div>
                                </td>
                                
                            </tr>
                        @endforeach
                        {{-- @for ($i = 1; $i < 21; $i++)
                        <tr>
                            <td class="text-center"></td>
                            <td class="font-w600">
                                <a href="javascript:void(0)">John Doe</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client{{ $i }}<em class="text-muted">@example.com</em>
                            </td>
                            <td>
                                <em class="text-muted">{{ rand(2, 10) }} days ago</em>
                            </td>
                        </tr>
                        @endfor --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
