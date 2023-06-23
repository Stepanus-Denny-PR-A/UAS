@extends('dasar.main')
@section('isi')


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-bordered border-black m-5 ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">movie</th>
            <th scope="col">tool</th>
          </tr>
        </thead>
        @php $index = 0; @endphp
        @foreach ($data as $filem)
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">{{ $filem->id }}</th>
            <td>
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="image-container">
                      <img style="width: 200px;height: 200px" src="{{ $filem->Gambar }}" alt="Gambar">
                      <div class="image-text text-center fs-5 fw-bold">
                        {{ $filem->Judul }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td class="text-center">
              <a href="{{ url('/'.$filem->id ) }}"><button class="btn btn-danger">Pergi</button></a>|
              <a href="{{ url('/del'. $id_wish[$index] ) }}"><button class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
        </tbody>
        @php $index++; @endphp
        @endforeach

      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
