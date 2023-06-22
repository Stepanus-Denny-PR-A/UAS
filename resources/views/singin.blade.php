@extends('dasar.regrestrasi')

@section('judul')
    <h1 class="card-title text-center">Sign In</h1>
@endsection

@section('form')
    <form action="/index/create_user" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
