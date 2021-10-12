<?php 

  require_once 'Vista/modulos/head.php';
 ?>

<body>

    <!--<header class="container mb-5  h-5 bg-success fixed-top">
        
    </header>-->
    <!-- fin del sintillo de la pagina-->
  <!--card-->


<!-- formulario de session para los administradores de inamujer--> 
<section class="container">
  
   <div class="row justify-content-center mb-3 mt-5">
          <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <img class="img-fluid" src="Vista/img/riesgocero2.jpeg">  
          </div>
    </div>

    <!-- contenedor del formulario de iniciar sesion-->
    <div class="row justify-content-center mb-3 mt-5">
        <form action="controladorsesion" method="POST" class="col-lg-4 cabeza">
          <div class="mb-3">
            <label for="" class="form-label text">Usuario</label>
            <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Contraseña</label>
            <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
          </div>
          
          <button type="submit" class="btn btn-primary mb-3">Entrar</button>
        </form>
    </div>
    <!-- fin del contenedor del formulario de iniciar sesion-->
</section>

<?php 

  require_once 'Vista/modulos/footer.php';
 ?>