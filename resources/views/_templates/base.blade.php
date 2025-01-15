<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin - @yield('title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-color: #EFEFEF;">
    <div class="container mt-5">
      <nav class="d-flex justify-content-between align-items-center">
        <h1 class="mb-4"> @yield('title') </h1>
        
        @include('_components/menu')
      </nav>

      <div class="card card-body shadow-sm">
        @yield('content')
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
