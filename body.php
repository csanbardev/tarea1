<div class="container">
  <h2>Formulario </h2>
  <form action="/index.php" method="post">
    <label for="nif">NIF:
      <input class="form-control" type="text" name="nif"
      <?php if(isset($_POST["nif"])) echo "value='{$_POST["nif"]}'"; ?>
      >
      <?php mostrarError($errores, "nif"); ?>
    </label>
    <br />
    <label for="name">Nombre:
      <input class="form-control" type="text" name="name"
      <?php if(isset($_POST["name"])) echo "value='{$_POST["name"]}'"; ?>
      >
      <?php echo mostrarError($errores, "name"); ?>
      
    </label>
    <br />
    <label for="surname">Apellidos:
      <input class="form-control" type="text" name="surname"
      <?php if(isset($_POST["surname"])) echo "value='{$_POST["surname"]}'"; ?>
      >
      <?php echo mostrarError($errores, "surname"); ?>
    </label>
    <br />
    <label for="nacimiento">Fecha de nacimiento:
      <input class="form-control" type="date" name="nacimiento"
      <?php if(isset($_POST["nacimiento"])) echo "value='{$_POST["nacimiento"]}'"; ?>
      >
      <?php echo mostrarError($errores, "nacimiento"); ?>
    </label>
    <br />
    <label for="email">Email:
      <input class="form-control" type="email" name="email"
      <?php if(isset($_POST["email"])) echo "value='{$_POST["email"]}'"; ?>
      >
      <?php echo mostrarError($errores, "email"); ?>
    </label>
    <br />
    <label for="password">Contraseña:
      <input class="form-control" type="password" name="password"
      <?php if(isset($_POST["password"])) echo "value='{$_POST["password"]}'"; ?>
      >
      <?php echo mostrarError($errores, "password"); ?>
      
    </label>
    <br />
    <input type="submit" name="submit" value="Enviar" class="btn btn-success">


  </form>
</div>