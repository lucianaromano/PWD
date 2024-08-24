<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formulario8" class="needs-validation" novalidate action="../control/mostrar8.php" method="post"><br>

      <h2 class="titulo1">TP N°1 - Ejercicio 8</h2><br>


        <div class="form-group mb-3 col-sm-8">
          <input id="edad" name="edad" type="text" class="form-control"  placeholder="Edad" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese Edad</div>
        </div>


        <div class="form-group mb-3 col-sm-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudiante" id="inlineRadio1" value="si" required>
              <label class="form-check-label" for="inlineRadio1">Soy estudiante</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudiante" id="inlineRadio3" value="no" required>
              <label class="form-check-label" for="inlineRadio3">No soy estudiante</label>
            </div>
            <div class="invalid-feedback">Seleccione una opción</div>
        </div>

        <div class="form-group mb-3 col-sm-12">
          <button class="btn btn-success" type="submit">Enviar</button>
          <button class="btn btn-danger" id="botonBorrar" title="Borrar">Borrar</button>
        </div>
        
        <a class="linkMenu" href="../../index.php">Menu</a>
    </form>

</div>

</body>
</html>



<script type="text/javascript">
//Limpio el formulario
$("#botonBorrar").on("click", function(event) {
    event.preventDefault();
    $('#formulario8')
      .trigger("reset")
      .removeClass('was-validated')
  });

</script>