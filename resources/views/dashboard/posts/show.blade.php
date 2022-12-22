@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
            <div class="col-md-6 align-self-center mt-2">
              <div class="card" style="width: 33rem;">
                  <img src="https://source.unsplash.com/1500x400?{{ $post->category->nama }}" class="card-img-top img-fluid" alt="gambar" style="height: 25rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{ $post->judul }}✔</h5>
                    <p class="card-text">{!! $post->caption !!}</p>
                <div class="content">
                    <a href="/dashboard/posts" class="badge bg-success text-decoration-none"><span data-feather="arrow-left" class="align-text-bottom"></span> Kembali ke postingan</a>
                    <a href="#" class="badge bg-warning text-decoration-none"><span data-feather="edit" class="align-text-bottom"></span> Ubah</a>
                    <a href="#" class="badge bg-danger text-decoration-none"><span data-feather="x-circle" class="align-text-bottom"></span> Hapus</a>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection