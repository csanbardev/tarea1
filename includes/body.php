<div class="container">
  <h2>Formulario </h2>
  <form action="/includes/validar.php" method="post">
    <label for="nif">NIF:
      <input class="form-control" type="text" name="nif">
    </label>
    <br />
    <label for="name">Nombre:
      <input class="form-control" type="text" name="name">
    </label>
    <br />
    <label for="surname">Apellidos:
      <input class="form-control" type="text" name="surname">
    </label>
    <br />
    <label for="nacimiento">Fecha de nacimiento:
      <input class="form-control" type="date" name="nacimiento">
    </label>
    <br />
    <label for="email">Email:
      <input class="form-control" type="email" name="email">
    </label>
    <br />
    <label for="password">Contraseña:
      <input class="form-control" type="password" name="password">
    </label>
    <br />
    <input type="submit" name="submit" value="Enviar" class="btn btn-success">


  </form>
</div>