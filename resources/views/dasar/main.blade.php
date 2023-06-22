<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

     @yield('gaya');

</head>
  <body >
    <nav class="navbar navbar-dark navbar-expand-lg bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Filemku</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/main">Filem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/index/studio">Studio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/Main/logout">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">@yield('isi')<div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
