<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/iconoPublic.jpeg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructora</title>
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    <!--ESTILOS DE BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--ESTILOS DEL PROYECTO-->
    <link rel="stylesheet" href="stylesheets/style.css">
        
</head>
<body>
    <div style="position: fixed; width:100%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CONSTRUCTORA J.M.LLUEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                </li>
                

                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="presupuestos.php">PRESUPUESTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="obras.php">OBRAS REALIZADAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca.php">ACERCA DE NOSOTROS</a>
                </li>
                
                </ul>
            </div>
            </div>
        </nav>
    </div>

  <div class="box-fondo" style="padding-top:56px;">
      <img src="images/fondo.jpeg" alt="">
  </div>
  <div class="box-fondo-compu" style="padding-top:56px;">
      <img src="images/fondo.jpeg" alt="">
  </div>
  <br>
  <br>
  <h2 class="title-about">OBRAS</h1>
  <hr>
  <?php
    // include_once "db_empresa.php";
    include_once "controllers/conexion.php";
    $estado = 1;
    $query = "SELECT * FROM obras ORDER by id desc;";
    $res = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
  <div class="caja-obra" style="padding-left: 10px; padding-right: 10px;">
    <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
    <p class="text-about descripcion"><?php echo $row['descripcion']; ?></p>
  </div>
  <hr>   
  <?php } ?>
  <h1 class="title-about">ACERCA DE NOSOTROS</h1>
  <div style="padding-left: 10px; padding-right: 10px;">
    <p class="text-about">Somos una empresa constructora que nace en 2011 con el aporte de profesionales de vasta experiencia en el campo de la construcción y arquitectura. En este tiempo de vida hemos desarrollado proyectos y ejecuciones de obra de arquitectura que nos incentiva a crecer con el impulso de la actividad pública y privada.

    El objetivo de equipo es desarrollar la creatividad de proyectos y la excelencia en la construcción de obras propias y de terceros que respalden el crecimiento con la experiencia de nuestros profesionales.
    </p>
  </div>


  <footer class="footer">
    <br>
    <h2>CONTACTENOS</h2>
    <p>Whatsapp: 221-6011694</p>
    <p>Tel: 221-6011694</p>
    <hr>
    <h2>SEGUINOS</h2>
    <div>
        <a href=""><i class="fab fa-facebook-square"></i></a> ㅤ
        <a href=""><i class="fab fa-instagram" style="color: orange;"></i></a>
        <br>
        <br>
    </div>
</footer>
  <a href="https://api.whatsapp.com/send?phone=542216011694&text=Hola%20te%20hablo%20desde%20tu%20pagina%20necesito%20un%20presupuesto%20para%20un%20trabajo%2Fobra" class="whatsapp" target="_blank"> <i class="fab fa-whatsapp"></i></a>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>

</body>
</html>