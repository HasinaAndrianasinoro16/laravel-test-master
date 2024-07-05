<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-5/css/all.css">
    <link rel="stylesheet" href="assets/fontawesome-5/css/all.min.css">
    {{-- <title>poduct test</title> --}}
</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="Dark offcanvas navbar" style="border-bottom: 2px solid white;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="{{ asset('logo/vector/default-monochrome.svg') }}" alt="E-tsabo" width="100%" height="80"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">E-Tsabo ah zao</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="btn btn-outline-light btn-lg w-100" aria-current="page" href="#"><i class="fas fa-home" ></i> Home</a>
          </li>
          <div class="py-3"></div>
          <li class="nav-item">
            <a class="btn btn-outline-light btn-lg w-100" href="#"><i class="fas fa-head-side-mask"></i> Patient</a>
          </li>
          <div class="py-3"></div>
          <li class="nav-item">
            <a class="btn btn-outline-light btn-lg w-100" href="#"><i class="fas fa-stethoscope" ></i> Service</a>
          </li>
          <div class="py-3"></div>
          <li class="nav-item dropdown">
            <a class="btn btn-outline-light btn-lg w-100 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fas fa-user-md" ></i> Ressource humainse
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Responsable Entreprise</a></li>
              <li><a class="dropdown-item" href="#">Responsable Service</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</body>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="offcanvas.js"></script>
</html>