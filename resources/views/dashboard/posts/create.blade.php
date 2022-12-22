@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat postingan baru</h1>
    </div>

    <div class="col-lg-8">
        <form action="/dashboard/posts" method="post">
            @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="judul" class="form-control" id="judul" name="judul" placeholder="Judul">
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="slug" class="form-control" id="slug" name="slug" placeholder="slug">
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->nama }}</option>
                @endforeach
               
              </select>
            </div>
            <div class="mb-3">
              <label for="caption" class="form-label">Caption</label>
              <input id="caption" value="Ketikan sesuatu" type="hidden" name="caption">
              <trix-editor input="caption"></trix-editor>
            </div>


            <button type="submit" class="btn btn-primary">Kirim Postingan</button>
          </form>
    </div>

    <script>
       const judul = document.querySelector('#judul');
       const slug = document.querySelector('#slug');

       judul.addEventListener('change', function() {
         fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
         .then(response => response.json())
         .then(data => slug.value = data.slug)
       });

       document.addEventListener('trix-file-accept', function(e) {
         e.preventDefault();
       });
    </script>
@endsection