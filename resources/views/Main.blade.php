    @extends('dasar.main')
    @section('gaya')
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
        }

        .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
        }

        .bi {
        vertical-align: -.125em;
        fill: currentColor;
        }

        .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
        }

        .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
        z-index: 1500;
        }
        img{
            width: 300px;
            height: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        body{
            background-image:url('https://static.vecteezy.com/system/resources/previews/010/952/077/original/red-and-white-business-background-blank-modern-background-with-hexagonal-pattern-design-eps-free-vector.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    @endsection

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
                <h4 class="text-center">{{ $s->Judul }}</h4>
            <img src="{{ $s->Gambar }}" alt="">
            <div class="card-body">
                <p class="card-text text-bold"> {{ \Illuminate\Support\Str::limit(strip_tags($s->Deskripsi), 100) }}</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/{{ $s->id }}"> <button type="button" class="btn btn-danger">More</button></a>
                </div>
                <small class="text-body-secondary">{{ $s->{'Tahun_Terbit'} }}</small>
                </div>
            </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
</div>
    @endsection
