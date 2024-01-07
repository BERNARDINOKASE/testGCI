@extends('layout.master')

@section('title','GCI Store')
{{-- @section('headertitle','Selamat Datang di Garuda Cyber Indonesia Store) --}}

@section('content')
<section class="row">
    <div class="col-md-12 col-sm-12">
        <div class="row">
            @foreach ($data as $item)
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <a class="card-content"  href=""> 
                        <img class="card-img-top img-fluid" src="{{asset('assets/')}}/images/samples/home.jpeg" alt="Card image cap" id="file-2" /> 
                        <div class="card-body">
                            <h4 class="card-title fs-4">{{$item->name}}</h4>
                            {{-- <p class="card-text fs-4 ms-4">Deskripsi</p> --}}
                            {{-- <p class="card-text">{{$item->deskripsi}}</p> --}}
                            {{-- <p class="card-text">TEst</p> --}}
                            <a class="card-link">@money($item->price, 'IDR')</a>
                        </div>
                        <div class="card ms-3 me-3">
                            <a class="btn btn-sm btn-outline-success">Langganan</a>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection