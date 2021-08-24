 <div class="login-page">
 <div class="login-box">
  <div class="login-logo">
    <b>Unión </b>Collage
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar sesión</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="" id="rutlogin" name="rut" class="form-control" autocomplete="off" placeholder="" onkeyup="formatCliente1(this)" minlength="8" maxlength="11">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="" name="pass" autocomplete="off" class="form-control" placeholder="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div> 
          <!-- /.col -->
        </div>

        <?php  

        $ingreso = new UsuariosC();
        $ingreso -> IniciarSesion();

        ?>

      </form>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>

