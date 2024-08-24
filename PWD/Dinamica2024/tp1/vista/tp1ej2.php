<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formularioIngreso" class="needs-validation" novalidate action="../control/mostrar.php" method="get"><br>

      <h2 class="titulo1">TP N°1 - Ejercicio 2</h2><br>

        <div class="form-group mb-3 col-sm-4">
          <input id="lunes" name="lunes" type="text" class="form-control"  placeholder="Horas Lunes" required maxlength="3" 
          onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese horas del Lunes</div>
        </div>

        <div class="form-group mb-3 col-sm-4">
          <input id="martes" name="martes" type="text" class="form-control"  placeholder="Horas Martes" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese horas del Martes</div>
        </div>

        <div class="form-group mb-3 col-sm-4">
          <input id="miercoles" name="miercoles" type="text" class="form-control"  placeholder="Horas Miercoles" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese horas del Miercoles</div>
        </div>

        <div class="form-group mb-3 col-sm-4">
          <input id="jueves" name="jueves" type="text" class="form-control"  placeholder="Horas Jueves" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese horas del Jueves</div>
        </div>

        <div class="form-group mb-3 col-sm-4">
          <input id="viernes" name="viernes" type="text" class="form-control"  placeholder="Horas Viernes" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese horas del Viernes</div>
        </div>

        <div class="form-group mb-3 col-md-4">
          <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
        </div>
        
        <a class="linkMenu" href="../../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>