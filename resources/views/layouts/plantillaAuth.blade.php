<!DOCTYPE html>
<html lang="es">
  <head>
  <!-- Metadatos -->
  <meta charset="UTF-8">
  <meta name="author" content="Grupo2 - 3er ciclo DAI">
  <meta name="description" content="Proyecto final DAI">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML, Bootstrap, Vue, PHP, Laravel">
  <!-- Titulo -->
  <title>Clinica Tecsana</title>
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset('assets/img/Recurso.svg')}}">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- iconos bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
  </head>
  <body>
    <main>

      @yield('content')
      
    </main>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
  </body>
</html>