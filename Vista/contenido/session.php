  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(Vista/img/dinero.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="">
          <strong>RIESGO CERO</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
             
            </li>
            <li class="nav-item me-3 me-lg-0">
              
            </li>
            <li class="nav-item me-3 me-lg-0">
             
            </li>
            <li class="nav-item me-3 me-lg-0">
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
              <div class="text-center mb-2">
                 <img class="img-fluid" src="Vista/img/riesgocero3.png" alt="">
              </div>
            <div class="col-xl-5 col-md-8">
              <form class="bg-white  rounded-5 shadow-5-strong p-5"  action="sessionNull" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example1"  name="usuario" class="form-control" />
                  <label class="form-label" for="form1Example1">Usuario</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example2"  name="contrasena" class="form-control" />
                  <label class="form-label" for="form1Example2">Contraseña</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success btn-block">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

 

<!--<section class="container">

<div class="row justify-content-center mb-3 mt-5">
          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <img class="img-fluid" src="Vista/img/riesgocero2.jpeg">  
          </div>
    </div>

     contenedor del formulario de iniciar sesion
    <div class="row justify-content-center mb-3 mt-5">
        <form action="sessionNull" method="POST" class="col-lg-4 cabeza">
          <div class="mb-3">
            <label for="" class="form-label text">Usuario</label>
            <input type="text" autocomplete="on" required="" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" required="" name="contrasena" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Entrar</button>
        </form>
    </div>
</section>-->