@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">User</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">User</li>
                        <li class="breadcrumb-item active" aria-current="page">create</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add User</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('users.store')}}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="example-ltf-name">{{__('Full Name')}}</label>
                        <input type="name" class="form-control form-control-alt {{ $errors->has('name') ? 'is-invalid' : '' }}" id="example-ltf-name" name="name" placeholder="Your Name.." value="{{ old('name')}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="example-ltf-email">{{__('email')}}</label>
                        <input type="email" class="form-control form-control-alt {{ $errors->has('email') ? 'is-invalid' : '' }}" id="example-ltf-email" name="email" placeholder="Your Email.." value="{{ old('name')}}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="example-ltf-password2">Password</label>
                        <input type="password" class="form-control form-control-alt" id="example-ltf-password2" name="example-ltf-password2" placeholder="same as email" disabled>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-hero-primary">submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
