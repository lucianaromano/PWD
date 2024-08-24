<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
  <form id="formularioIngreso" action="../control/mostrar6.php" method="POST"><br>

    <h2 class="titulo1">TP N°1 - Ejercicio 7</h2><br>

      <div class="form-group mb-3 col-sm-6">
        <input id="valor1" name="valor1" type="text" class="form-control" placeholder="valor 1" maxlength="5"  required onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
      </div>

      <div class="form-group mb-3 col-sm-6">
        <input id="valor2" name="valor2" type="text" class="form-control"  placeholder="valor 2" maxlength="5" required onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
      </div>

      <div class="form-group col-6">
        <select  id="operando" name="operando" class="form-select" required>
          <option selected value="">Operacion</option>
          <option value="+">Suma</option>
          <option value="-">Resta</option>
          <option value="*">Multiplicación</option>
          <option value="/">División</option>
        </select>
      </div><br>


      <div class="form-group col-md-4">
        <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
      </div><br>
        
      <a class="linkMenu" href="../../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>