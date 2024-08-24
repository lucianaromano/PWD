<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>
<body class="fondo"><br>
  

<div class="container">
  
  <div class="card border-primary">
    <div class="card-header bg-primary border-primary">Cinem@s</div>
  <div class="card-body">

    <form class="row g-3 needs-validation" novalidate id="formularioCine" action="../control/mostrar7.php" method="POST" enctype="multipart/form-data">
  

        <div class="form-group col-sm-6">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" required>
        <div class="invalid-feedback">Ingrese titulo</div>
      </div>

      
      <div class="form-group col-sm-6">
        <label for="actores">Actores</label>
        <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required>
        <div class="invalid-feedback">Ingrese actores</div>
      </div>

      
      <div class="form-group col-sm-6">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
        <div class="invalid-feedback">Ingrese director</div>
      </div>

      
      <div class="form-group col-sm-6">
        <label for="guion">Guión</label>
        <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión" required>
        <div class="invalid-feedback">Ingrese guión</div>
      </div>

      
      <div class="form-group col-sm-6">
        <label for="produccion">Producción</label>
        <input type="text" class="form-control" id="produccion" name="produccion" placeholder="" required>
        <div class="invalid-feedback">Ingrese producción</div>
      </div>

      
      <div class="form-group col-sm-2">
        <label for="año">Año</label>
        <input type="text" maxlength="4" id="año" name="año" placeholder=""
        onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control" required>
        <div class="invalid-feedback">Ingrese año</div>
      </div>

      <div class="form-group col-sm-6">
        <label for="nacionalidad">Nacionalidad</label>
        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="" required>
        <div class="invalid-feedback">Ingrese nacionalidad</div>
      </div>

      
      <div class="form-group col-sm-4">
        <label for="genero">Genero</label>
        <select id="genero" name="genero" class="form-select" required>
            <option value="">Seleccione genero</option>
            <option value="Acción">Acción</option>
            <option value="Comedia">Comedia</option>
            <option value="Drama">Drama</option>
            <option value="Romántica">Romántica</option>
            <option value="Suspenso">Suspenso</option>
            <option value="Terror">Terror</option>
            <option value="Otras">Otras</option>
        </select>
        <div class="invalid-feedback">Ingrese genero</div>
      </div>

      
      <div class="form-group col-sm-4"><!-- valor Unicode de la tecla del teclado que se pulsa-->
        <label for="duracion">Duración</label>
        <input type="text" maxlength="3" id="duracion" name="duracion" placeholder=""
        onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  class="form-control" required>
        <div class="invalid-feedback">Ingrese duración</div>
      </div>


      <div class="form-group col-sm-8">
        <label for="restriccion">Restricciones de edad</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="edad" value="Todo Público" required>
          <label class="form-check-label" for="edad1">Todo Público</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="edad" value="Mayores de 7 años" required>
          <label class="form-check-label" for="edad2">Mayores de 7 años</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="edad" value="Mayores de 18 años" required>
          <label class="form-check-label" for="edad3">Mayores de 18 años</label>
        </div>
        <div class="invalid-feedback">Ingrese restriccion</div>
      </div>


      <div class="form-group col-sm-12">
        <label for="sinopsis">Sinopsis</label>
        <textarea class="form-control" id="sinopsis" name="sinopsis" maxlength="250" rows="3" autocomplete="off" placeholder="" required></textarea>
        <div class="invalid-feedback">Ingrese sinopsis</div>
      </div>

      <div class="form-group col-sm-12">
          <label>Adjuntar archivo</label><br>
          <input name="archivo" id="archivo" type="file"><br>
      </div>


      <div class="form-group col-sm-12" style="text-align: right;">
        <button class="btn btn-primary" type="submit" id="botonEnviar">Enviar</button>
        <button class="btn btn-danger" id="botonBorrar2" title="Borrar">Borrar</button>
      </div>

    <div align="center"><a class="linkMenu" href="../../index.php">Menu</a></div><br>
    </form>
  </div>

</div>

</div>

</body>
</html>

