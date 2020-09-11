  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-10" 

  style= "background-color: rgb(13, 71, 161) ;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link user-panel mt-3 pb-3 mb-3 d-flex">
      <img src="../../dist/img/LCA.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-10"
           style="opacity: .9">
      <span class="brand-text font-weight-light" style= "font-size: 18px;">Liga Comunal del Agua</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style= "background-color: rgb(13, 71, 161);">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="../../dist/img/usuario.png" class="img-circle elevation-1" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{auth()->user()->name}}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-edit"></i>
              <p>
                Registros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                  <a href="{{ route('create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                  <p>Crear una nueva ASADA</p>
                  </a>

                 <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de ASADAS</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Control Operativo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bitacora') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Bitacora</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('buscar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buscar Bitacora</p>
                </a>
              </li>
              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-map"></i>
              <p>
                Mapeos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('map')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de Mapeo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-file"></i>
              <p>
                Notas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>