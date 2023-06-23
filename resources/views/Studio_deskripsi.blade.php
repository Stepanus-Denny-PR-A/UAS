<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <Style>
        .imgposter{
        width: 300px;
        height: 440px;
        display: block;
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 30px
        }
        iframe{
        display: block;
        margin-left: 100px;
        margin-right: auto;
        margin-top: 30px;
        width : 560px;
        height: 440px;
        }
        cluded,
      to get the result that you can see in the preview selection body {
        margin-top: 20px;
      }
      #comments form {
        margin-bottom: 30px;
      }

      #comments .btn {
        margin-top: 7px;
      }

      #comments form fieldset {
        clear: both;
      }

      #comments form textarea {
        height: 100px;
      }

      #comments .media {
        border-top: 1px dashed #dddddd;
        padding: 20px 0;
        margin: 0;
      }

      #comments .media > .pull-left {
        margin-right: 20px;
      }

      #comments .media img {
        max-width: 100px;
      }

      #comments .media h4 {
        margin: 0 0 10px;
      }

      #comments .media h4 span {
        font-size: 14px;
        float: right;
        color: #999999;
      }

      #comments .media p {
        margin-bottom: 15px;
        text-align: justify;
      }

      #comments .media-detail {
        margin: 0;
      }

      #comments .media-detail li {
        color: #aaaaaa;
        font-size: 12px;
        padding-right: 10px;
        font-weight: 600;
      }

      #comments .media-detail a:hover {
        text-decoration: underline;
      }

      #comments .media-detail li:last-child {
        padding-right: 0;
      }

      #comments .media-detail li i {
        color: #666666;
        font-size: 15px;
        margin-right: 10px;
      }
    </Style>
</head>
<body>

    @include('dasar.main')
    <div class="card mt-5 " >
        <div class="row g-3">
            <div class="col-md-3">
                <img class="embed-responsive imgposter float-start" src= {{ $data->Gambar }}  alt="Gambar_poster">
              </div>
          <div class="col-md-4 ">
            <iframe  src= {{ $data->vidio }} frameborder="1" allowfullscreen></iframe>
          </div>
          <div class="col-md-12">
            <div class="card-body">
              <h1 class="card-title">{{$data->Nama}}</h1>
              <p class="card-text">Sinopsis:<br>{{$data->Deskripsi}}</p>
              <p class="card-text">Filemnya:<br>{{$data->Filemnya}}</p>
              <p class="card-text">tahun: {{$data->Tahun_berdiri}}</p>
              <a href="/main"><button class="btn btn-danger ">back</button></a>
          </div>
        </div>
      </div>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
      <section class="content-item" id="comments">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</body>
</html>


