<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formularioIngreso" class="needs-validation" novalidate action="../control/vernumero.php" method="POST"><br>

      <h2 class="titulo1">TP N°1 - Ejercicio 1</h2><br>

        <div class="form-group mb-3 col-sm-8">
          <input id="numero" name="numero" type="text" class="form-control"  placeholder="Numero" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese Número</div>
        </div>

        <div class="form-group mb-3 col-md-4">
          <button class="btn btn-lg btn-success btn-block" type="submit" id="btnEnviar">Enviar</button>
        </div><br>
        
        <a class="linkMenu" href="../../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>
