<?php

  require_once 'Controlador/vistaControlador.php';

  $plantilla = new vistaControlador();
  //$plantilla->obtenerPlantillaControlador();
  $vista = $plantilla->obtenerVistaControlador();

  if ($vista == "Vista/session.php") {

  	require_once 'Vista/session.php';
 
  }else{
    
    if (isset($_SESSION['usuario']) || isset($_SESSION['pass'])) {
            
            session_start(); 
            require_once $vista;
            //header('location:vistacambiarvalores');
            echo "si entro";
            //exit;
          }else{
             require_once $vista;
            //header('location:session');
    } 
      //session_start(); 
      //require_once $vista;
  }
  
  
?> 