<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head ?>
</head>

<body class="fondo">
<div class="container" align="center"><br><br>
  
    <form id="formularioIngreso" class="needs-validation" novalidate action="vernumero.php" method="POST"><br>

      <h2>TP N°1 - Ejercicio 1</h2><br>

        <div class="form-group mb-3 col-sm-8">
          <input id="numero" name="numero" type="text" class="form-control"  placeholder="Numero" required maxlength="3" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
          <div class="invalid-feedback">Ingrese Número</div>
        </div>

        <div class="form-group mb-3 col-md-4">
          <button class="btn btn-lg btn-success btn-block" type="submit" id="btnEnviar">Enviar</button>
        </div><br>
        
        <a class="linkMenu" href="../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>



<script type="text/javascript">
  
  (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        else{
          var numero = document.getElementById('numero').value;
          if(numero == "2"){
            alert("ES NUMERO DOS");
            event.preventDefault()
            event.stopPropagation()
          }
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>