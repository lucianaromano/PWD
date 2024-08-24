<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head?>
</head>
<body class="fondo"><br>

<div class="container" align="center"><br><br>
  
    <form id="formulario3" action="../control/verificaArchivo1.php" method="POST" enctype="multipart/form-data" onSubmit="return validar();"><br>

      <h2>TP N°3 - Ejercicio 1</h2><br>

        <div class="form-group mb-3">
          <label>Adjuntar archivo</label><br>
            <input name="archivo" id="archivo" type="file"><br>
        </div>

        <div class="form-group mb-3 text-center"> 
          <button class="btn btn-lg btn-success" type="submit" id="botonEnviar">Enviar</button>
        </div>

        <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
    </form>

</div>

</body>
</html>




<script type="text/javascript">

   function validar(){
    $salida = true;
     
     if ($('input[type="file"]').val() == ''){ 
      alert("No adjunto ningun archivo");
      $salida = false;
    }
    return $salida;
  }
</script>

