<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/iconoAdmin.jpeg">
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
    <link rel="stylesheet" href="stylesheets/styleRegistro.css">
        
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
  </div>
  <br>
  <h3 style="text-align:center;">AGREGAR UNA OBRA</h1>
  <form action="controllers/crearObra.php" method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Ingrese la descripcion</label>
        <textarea name="descripcion" rows="3" cols="30" class="input-crear"></textarea>
        <br id="br-descuento">
        <label for="imagen">Carga la imagen "Principal"</label>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div> 
        <hr>    
        <button class=".button" type="submit" style="margin-top:5px;" name="guardar">Crear Obra</button>
    </form>
  
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>

</body>
</html>