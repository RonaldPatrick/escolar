  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/proyecto/inicio" class="brand-link">
      <img src="http://localhost/proyecto/vistas/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://localhost/proyecto/vistas/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <?php if ($_SESSION['roles'] == "Alumno"): ?>
            <a href="http://localhost/proyecto/perfil-alumno" class="d-block"><?php echo $_SESSION['nombre'] ?></a>
          <?php elseif($_SESSION['roles'] == "Docente" || $_SESSION['roles'] == "Admin"): ?>  
            <a href="http://localhost/proyecto/perfil-docente" class="d-block"><?php echo $_SESSION['nombre'] ?></a>
          <?php endif ?>

          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="http://localhost/proyecto/matriculas" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>Matriculas</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="http://localhost/proyecto/cursos" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>Cursos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="http://localhost/proyecto/materias" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Materias</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="http://localhost/proyecto/salir" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt" style="color: #e30909"></i>
              <p>Salir</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>