@extends('frontend.category.main')

@section('container')
<div class="container ">
        <div class="row py-5 mt-5">

        @forelse ($categories as $category )
            <div class="col-md-6 col-lg-6 mb-3">
                    <div class="card text-bg-dark" style="height: 400px;">
                        <a href="/posts?category={{ $category->slug }}" class="text-white">
                        <img src="{{ Storage::url($category->icon) }}" height="400" class="card-img" alt="...">
                        
                        <div class="card-img-overlay">
                            <h5 class="card-title mt-2 text-info">{{ $category->name }}</h5>
                        </div>
                        </a>
                    </div>
            </div>  
        @empty
            <p>Belum ada kategori terbaru</p>
        @endforelse
            
        </div>
    </div>
@endsection