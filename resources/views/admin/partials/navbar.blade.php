<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light" style="color: rgba(251, 252, 252); background-color: rgb(3, 169, 244);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Regresar a la página informativa</a>
      </li>

      <form class="form-inline ml-2">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/"
             onclick="event.preventDefault();
            document.getElementById('logout-form').submit()" class="nav-link">Cerrar sesión</a>

      </li>
    </ul>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
