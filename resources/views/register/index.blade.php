@extends('layouts.main')

@section('isiutama')
<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin w-100 m-auto">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center">Please Registrasi</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
          <label for="nama">Nama</label>
        </div>

        <div class="form-floating">
          <input type="username" class="form-control" id="username" name="username" placeholder="Masukan username">
          <label for="username">Username</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email">
            <label for="email">Email</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar!</button>
      </form>
      <small class="d-block text-center mt-3">Sudah registrasi? <a href="/login">Login sekarang!</a></small>
    </main>
  </div>
</div>
@endsection