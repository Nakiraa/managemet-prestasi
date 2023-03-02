@extends('front.layouts.frontend')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-4">
            <div class="div">
                <img src="{{ asset('uploads/'. $artikel->gambar_artikel) }}" alt="">
            </div>
            <div class="detail-content mt-2 p-4">
                <div class="detail-badge">
                    <a href="" class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</a>
                    <a href="" class="badge badge-warning">{{ $artikel->users->name }}</a>
                </div>
                <h2>{{ $artikel->judul }}</h2>
                <div class="detail-body">
                    <p>
                        {!! $artikel->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="detail-sidebar-iklan">
                <h4>judul iklan</h4>
                <hr>
                <a href="">
                    <img src="{{ asset('uploads/grunge-black-concrete-textured-background_53876-124541.jpg') }} " width="300px">
                </a>
            </div>

            <div class="detail-sidbar-kategori">
                <h4>judul iklan</h4>
                <hr>
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration:none">
                        <p>nama kategori</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                </div>
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration:none">
                        <p>nama kategori</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                </div>
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration:none">
                        <p>nama kategori</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                </div>
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration:none">
                        <p>nama kategori</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                </div>
                <div class="sidebar-kategori d-flex flex-wrap">
                    <a href="" style="text-decoration:none">
                        <p>nama kategori</p>
                    </a>
                    <p class="ml-auto text-right"><span class="badge badge-dark">7</span></p>
                </div>
            </div>

            <div class="detail-sidebar-artikel">
                <h4 class="mt-4">Artikel terbaru</h4>
                <hr>
                <div class="media mt-3">
                    <img src="{{ asset('uploads/grunge-black-concrete-textured-background_53876-124541.jpg') }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>
                <div class="media mt-3">
                    <img src="{{ asset('uploads/grunge-black-concrete-textured-background_53876-124541.jpg') }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>
                <div class="media mt-3">
                    <img src="{{ asset('uploads/grunge-black-concrete-textured-background_53876-124541.jpg') }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>
                <div class="media mt-3">
                    <img src="{{ asset('uploads/grunge-black-concrete-textured-background_53876-124541.jpg') }}" width="70px" class="mr-3" alt="...">
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

