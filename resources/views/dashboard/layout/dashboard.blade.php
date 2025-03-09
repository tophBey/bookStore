@extends('dashboard.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
           <img class="ms-5 shadow-lg rounded-circle" src="{{ Storage::url(auth()->user()->avatar) }}" alt="broken" width="300" height="300">
        </div>
        <div class="col-lg-6">
            <div>
                <h5>Nama : </h5>
                <h3>{{ auth()->user()->name }}</h3>
            </div>
            <hr>
            <div>
                <h5>Email : </h5>
                <h3>{{ auth()->user()->email }}</h3>
            </div>
            <hr>
            <div>
                <h5>Nomor Telepon : </h5>
                <h3>{{ auth()->user()->phone_number }}</h3>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection