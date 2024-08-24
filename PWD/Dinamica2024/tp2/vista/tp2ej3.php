<!DOCTYPE html>
<html>
<head>
  <?php include('head.php'); //Incluye en archivo head?>
</head>

<!-- Contiene los iconos -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<body class="fondo">

<div class="container" align="center"><br><br>
  
    <form id="formulario" action="../control/verificaPass.php" method="POST" onSubmit="return validarLogin();"><br>

      <h2 class="titulo1">Member Login</h2><br>

        <div class="input-group mb-3 col-sm-8">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
        </div>

         <div class="input-group mb-3 col-sm-8">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
          
        <button class="btn btn-lg btn-success" type="submit">Login</button><br><br>

        <a class="linkMenu" href="../../index.php">Menu</a><br>

    </form>

</div>

</body>
</html>



<script type="text/javascript">

  function validarLogin(){
    var valoresNumericos = /^[0-9]+$/; //Será valida la cadena que tenga desde el principio hasta el final caracteres comprendidos entre 0 y 9 
    var valoresLetras = /^[a-zA-Z]+$/; //con esta expresión se aceptan únicamente las letras del alfabeto, mayúsculas y minúsculas
    
    salida = true;

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if(password.length < '8'){
      alert("La contraseña debe tener un minimo de 8 caracteres");
      return false;
    }
    if(username === password){
      alert("La contraseña no puede ser igual al nombre de usuario");
      return false;
    }

    //match: se usa para obtener todas las ocurrencias de una expresión regular dentro de una cadena
    if((password.match(valoresNumericos)) || (password.match(valoresLetras))){
      alert("La contraseña debe tener letras y números");
      return false;
    }

    return salida;
  }
</script>