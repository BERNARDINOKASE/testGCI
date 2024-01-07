@extends('auth.master')

@section('title','Register')
@section('content')
<section class="row d-flex justify-content-center vh-100 align-items-center">
    <div class="col-md-6 col-sm-12">
        <div class="card">

            <div class="card-header text-center fs-2 fw-bold h-25">
                Register
                @if ($errors->any())
                    <div class="align-items-center fs-6">
                        <ul>
                            @foreach ($errors->all() as $item)
                            <div class="alert alert-danger alert-dismissible show fade  ">
                                {{$item}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{route('app.register')}}" method="POST" >
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="text" value="{{Session::get('name')}}" class="form-control" placeholder="Nama Lengkap" id="name" name="name">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="email" value="{{Session::get('email')}}" class="form-control" placeholder="Email" id="email" name="email">
                                    <div class="form-control-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                    <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group has-icon-left">
                                <div class="position-relative">
                                    <input type="password" class="form-control" placeholder="Konfirmasi Password" id="password_confirmation" name="password_confirmation">
                                    <div class="form-control-icon">
                                        <i class="bi bi-lock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <a href="{{route('login')}}" class="btn btn-light-secondary me-1 mb-1">Masuk</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection