<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formularioIngreso" class="needs-validation" novalidate action="../control/mostrar4.php" method="post"><br>

      <h2 class="titulo1" >TP N°1 - Ejercicio 5</h2><br>

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
        </div>

        <div class="form-group mb-3 col-sm-12">
            
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="inlineRadio1" value="No tiene" required>
              <label class="form-check-label" for="inlineRadio1">No tiene estudios</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="inlineRadio2" value="primarios" required>
              <label class="form-check-label" for="inlineRadio2">Primarios</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="estudio" id="inlineRadio3" value="secundarios" required>
              <label class="form-check-label" for="inlineRadio3">Secundarios</label>
            </div>
            
            <div class="invalid-feedback">Seleccione una opción</div>

        </div>

        <div class="form-group mb-3 col-sm-8">
          <select class="form-select" id="sexo" name="sexo" aria-label=".form-select-lg example" required>
            <option selected disabled value="">Sexo</option>
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
            <option value="No responde">No responde</option>
          </select>
          <div class="invalid-feedback">Selecciona un opción</div>
        </div>


        <div class="form-group mb-3 col-sm-4">
          <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
        </div>
        
        <a class="linkMenu" href="../../index.php">Menu</a>
    </form>

</div>

</body>
</html>