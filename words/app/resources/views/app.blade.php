<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>@yield('title')</title>
</head>

<body>
  <nav class="navbar ps-5 pt-3 bg-dark bg-gradient bg-opacity-75">
    <div class="container-fluid justify-content-start">
      <a class="btn btn-outline-light me-2" href="/">Aplicação Laravel</a>
      <a class="btn btn-sm btn-outline-success" href="/words">Palavras</a>
    </div>
  </nav>
  <div class="container bg-white pt-3">
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>