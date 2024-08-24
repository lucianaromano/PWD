<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formularioIngreso" class="needs-validation" novalidate action="../control/mostrar3.php" method="get"><br>

      <h2 class="titulo1">TP N°1 - Ejercicio 4</h2><br>

        <div class="form-group mb-3 col-sm-8">
          <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" maxlength="30" required>
          <div class="invalid-feedback">Ingrese Nombre</div>
        </div>

        <div class="form-group mb-3 col-sm-8">
          <input id="apellido" name="apellido" type="text" class="form-control"  placeholder="Apellido" maxlength="30" required>
          <div class="invalid-feedback">Ingrese Apellido</div>
        </div>

        <div class="form-group mb-3 col-sm-8">
          <input id="edad" name="edad" type="text" class="form-control"  placeholder="Edad" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese Edad</div>
        </div>

        <div class="form-group mb-3 col-sm-8">
          <input id="direccion" name="direccion" type="text" class="form-control"  placeholder="Dirección" maxlength="50" required>
          <div class="invalid-feedback">Ingrese Dirección</div>
        </div><br>

        <div class="form-group mb-3 col-sm-4">
          <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
        </div><br>
        
        <a class="linkMenu" href="../../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>