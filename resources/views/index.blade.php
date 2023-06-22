@extends('dasar.regrestrasi')
@section('judul')
<h1 class="card-title text-center">LOGIN</h1>
@endsection
@section('form')
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3 ">
              <label for="Email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="Email" name="email">
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" id="Password" name="password">
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          <br>
          <div ><a href="/index/sign_in"> belum punya akun?</a></div>
@endsection
