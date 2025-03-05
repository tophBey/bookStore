
@extends('auth.main')

@section('container')
<div class="container  mt-12 py-4">
        <div class="content  py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/book.jpg" alt="Image" class="rounded img-fluid">
                    </div>
                    <div class="col-md-6 contents mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="mb-4">
        
        
                                    <!-- pesan message success -->
                                    @if (session()->has('register'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('register') }}
                                    </div>

                                    @endif
                                    <!-- batas message -->

                                    @if (session()->has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                    
                                    <h3>Sign In <i class="fa-solid fa-user"></i></h3>
                                    <p class="mb-4 text-muted">Login Ke akun </p>
                                </div>
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="Email" class="mb-2"><b>Email</b></label>
                                        <!-- @error('name')is-invalid @enderror -->
                                        <input type="email" class="form-control mb-3 " id="Email" placeholder="Masukan Email"
                                            autocomplete="on" required name="email" >
                                            <!-- @error('name')
                                                <small class="invalid-feedback mb-1">{{ $message }}</small>
                                            @enderror -->
                                    </div>
                                    <div class="form-group last mb-3">
                                        <label for="password" class="mb-2"><b>Password</b></label>
                                        <!-- @error('name')is-invalid @enderror -->
                                        <input type="password" class="form-control " id="password" placeholder="Password"
                                            autocomplete="off" required name="password">
                                            <!-- @error('password')
                                                <small class="invalid-feedback mb-1">{{ $message }}</small>
                                            @enderror -->
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-block btn-primary px-5">
                                </form>
                                <small class="d-block mt-4">Belum Punya Akun? daftar <a href="{{ route('register') }}"
                                        class="text-decoration-none">disini</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

   

