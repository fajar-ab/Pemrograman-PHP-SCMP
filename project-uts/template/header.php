<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />
  <title>Jadwal</title>
</head>

<body class="bg-linght">

  <!-- judul -->
  <div class="bg-dark p-4 ">
    <span class="border border-2 border-light py-1 px-2 me-3 display-6 rounded float-start">
      <i class="fa-solid fa-list-check text-white"></i>
    </span>
    <h5 class="text-white h4">UTS Project</h5>
    <span class="text-muted">Aplikasi loster matakuliah</span>
  </div>
  <!-- judul -->

  <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark opacity-95">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-3 active" aria-current="page" href="?halaman=jadwal">
              <i class="fa-solid fa-calendar-check me-2"></i>Jadwal</a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link disabled">|</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="?halaman=matakuliah">
              <i class="fa-solid fa-book-open me-2"></i>Matakuliah</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>

  <div class="container my-4">