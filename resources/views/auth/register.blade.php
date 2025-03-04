@extends('auth.main')

@section('container')
    <div class="container  mt-12  py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h3>Register <i class="fa-solid fa-user"></i></h3>
                                <p class="mb-4 text-muted">Registrasikan Akun Kamu</p>
                            </div>
                            <form action="/register" method="post" class="mt-5" enctype="multipart/form-data">
                                @csrf
                            <div class="d-flex justify-content-between" style="width: 100%;">
                                <div class="form-group mb-3 " style="width: 48%;">
                                    <!-- @csrf -->
                                     
                                        <label for="nama" class="mb-2"><b>FullName</b></label>
                                        <input type="text" class="form-control @error('name')is-invalid @enderror"  id="nama" placeholder="Name" autocomplete="off" required name="name" value="{{old('name')}}">
                                        @error('name')
                                            <small class="invalid-feedback mb-1">{{ $message }}</small>
                                        @enderror
                                </div>

                                <div class="form-group mb-3" style="width: 48%;">
                                    <label for="avatar" class="mb-2"><b>Avatar</b></label>
                                    
                                    <input type="file" class="form-control @error('avatar')is-invalid @enderror  " id="avatar" placeholder="" autocomplete="off" required name="avatar" value="">
                                    @error('avatar')
                                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-between" style="width: 100%;">
                            <div class="form-group" style="width: 48%;">
                                    <label for="email" class="mb-2"><b>Email</b></label>
                                    
                                    <input type="email" class="form-control mb-3 @error('email')is-invalid @enderror"  id="email" placeholder="Email" autocomplete="off" required name="email" value="{{old('email')}}">
                                    @error('email')
                                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                                    @enderror
                            </div>
                                <div class="form-group mb-3" style="width: 48%;">
                                        <label for="phone_number" class="mb-2"><b>Phone Number</b></label>
                                        <input type="text" class="form-control  @error('phone_number')is-invalid @enderror " id="phone_number" placeholder="phone_number" autocomplete="off" required name="phone_number" value="{{old('phone_number')}}">
                                        @error('phone_number')
                                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                                         @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-between" style="width: 100%;">
                                <div class="form-group mb-3" style="width: 48%;">
                                        <!-- @error('password')is-invalid @enderror -->
                                        <!-- {{old('password')}} -->
                                        <label for="password" class="mb-2"><b>Password</b></label>
                                        <input type="password" class="form-control " id="password" placeholder="Password" autocomplete="off" required name="password" value="">
                                        <!-- @error('password')
                                            <small class="invalid-feedback mb-1">{{ $message }}</small>
                                        @enderror -->
                                </div>
                                <div class="form-group mb-3" style="width: 48%;">
                                        <!-- @error('password')is-invalid @enderror -->
                                        <!-- {{old('password')}} -->
                                        <label for="password_confirmation" class="mb-2"><b>Comfirm Password</b></label>
                                        <input type="password" class="form-control " id="password_confirmation" placeholder="Comfirm Password" autocomplete="off" required name="password_confirmation" value="">
                                        <!-- @error('password')
                                            <small class="invalid-feedback mb-1">{{ $message }}</small>
                                        @enderror -->
                                </div>
                            </div>

                        
                                <input type="submit" value="Register" class="btn btn-block btn-primary px-5 mt-4">
                            </form>
                            <small class="d-block mt-4">Sudah punya akun? Login <a href="{{ route('login') }}" class="text-decoration-none">disini</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contents">
                        <img src="images/book.jpg" alt="Image" class="img-fluid rounded">
                </div>
            </div>
    </div>  
@endsection

    
    
   

