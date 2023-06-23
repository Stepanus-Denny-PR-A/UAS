@extends('dasar.descripe')
    @section('gambar')
    {{ $data->Gambar }}
    @endsection
    @section('Judul')
    {{$data->Judul}}
    @endsection
    @section('Deskripsi')
    Sinopsis:<br>{{$data->Deskripsi}}
    @endsection
    @section('Tahun')
    Terbit tahun: {{$data->Tahun_Terbit}}
    @endsection
    @section('Biaya_Pembuatan')
    Biaya Pembuatan:{{$data->Biaya_Pembuatan}}
    @endsection
    @section('Pendapatan')
    Pendapatan: {{$data->Pendapatan}}
    @endsection
    @section('Sutradara')
    Sutradara: {{$data->Sutradara}}
    @endsection
    @section('Pemeran')
    Pemeran: {{$data->Pemeran}}
    @endsection
    @section('Tahun')
    {{$data->Tahun_Terbit}}
    @endsection
    @section('Trailer')
    {{ $data->Trailer }}
    @endsection
    @section('id')
    {{ $data->id }}
    @endsection
    @section('komentar')
    @foreach ($coments as $comen)
    @if ($comen->ID_filem == $data->id)
    <div class="media">
      <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" /></a>
      <div class="media-body">
        <h5 class="media-heading">user id: {{ $comen->ID_user }}</h5>
        <p>
          {{ $comen->Isi}}
        </p>
      </div>
    </div>
    @endif
    @endforeach
    @endsection

