@extends('dasar.main')
@section('isi')
<section class="py-1 text-center container">
<div class="row py-lg-5 border-bottom">
    <div class="col-lg-6 col-md-8 mx-auto">
    <h1 style="font-family: Roboto;" class="fw-light font-weight-bold">Filemku</h1>
    <h2 class="lead text-body font-weight-bold">Pilemku adalah platform web rekomendasi filem yang dirancang untuk memudahkan pengguna menemukan dan menonton film-film terbaik sesuai dengan preferensi mereka. Dengan antarmuka yang intuitif dan fitur-fitur yang kaya, Pilemku membantu pengguna menggali dunia film dengan lebih baik.</h2>
    </div>
</div>
</section>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach ($da as $s)
    <div class="col">
        <div class="card shadow-sm">
            <h4 class="text-center">{{ $s->Nama }}</h4>
        <img src="{{ $s->Gambar }}" alt="">
        <div class="card-body">
            <p class="card-text text-bold"> {{ \Illuminate\Support\Str::limit(strip_tags($s->Deskripsi), 100) }}</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href="/Studio{{ $s->id }}"> <button type="button" class="btn btn-danger">More</button></a>
            </div>
            <small class="text-body-secondary">{{ $s->{'Tahun_berdiri'} }}</small>
            </div>
        </div>
        </div>
    </div>

    @endforeach
</div>
</div>
</div>
@endsection
