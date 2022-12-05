@extends('layouts.main')

@section('isiutama')
    <div class="container">
        <div class="row justify-content-center">
            <h3>Categories</h3>
            @foreach ($categories as $category)
                <div class="col-md-3"></div>
                <div class="col-md-6 mt-2">
                  <div class="card" style="width: 33rem;">
                     <div class="card-body">
                        <h5 class="card-title"><a href="/categories/{{ $category->slug }}">{{ $category->nama }}</a></h5>
                     </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3"></div>
            @endforeach
        </div>
    </div>
@endsection

{{-- Post::create([
   'judul' => 'Post Ketiga',
   'slug' => 'Post-Ketiga',
   'excrpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veniam, enim voluptates optio, voluptatem laborum nostrum facere maiores sit necessitatibus et ipsam culpa ratione,',
   'caption' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus veniam, enim voluptates optio, voluptatem laborum nostrum facere maiores sit necessitatibus et ipsam culpa ratione, alias aut sed dolorum asperiores soluta quam ex inventore? Cum harum culpa voluptatibus omnis similique,</p><p>cupiditate deleniti distinctio minus laboriosam placeat quibusdam est rerum vel corporis labore accusamus id quasi voluptate illo beatae officia minima. Vero dolore est eius ab et dicta aperiam rerum optio velit voluptas quisquam similique,</p><p>cumque, laborum ad. Fugit quasi, rerum laudantium earum magnam nostrum molestiae eius, corporis eaque, architecto est asperiores ipsam! Nam, odit alias distinctio nostrum ad ipsa minus! Cumque, recusandae veniam.</p>'
]) --}}

  



