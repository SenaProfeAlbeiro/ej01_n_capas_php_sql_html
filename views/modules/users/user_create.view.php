<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control</title>
</head>
<body>
  <h1>Panel de Control</h1>
  <a href="?c=Dashboard">Inicio</a>
  <h3>Registrar Usuario</h3>
  <form action="" method="POST">
    <div>
      <label for="">Rol</label>
      <select name="rol_code" id="">
        <option value="1">admin</option>
        <option value="2" selected>customer</option>
        <option value="3">seller</option>
      </select>
    </div>
    <div>
      <label for="">Nombres</label>
      <input type="text" name="user_name">
    </div>
    <div>
      <label for="">Apellidos</label>
      <input type="text" name="user_lastname">
    </div>
    <div>
      <label for="">Identificación</label>
      <input type="text" name="user_id">
    </div>
    <div>
      <label for="">Email</label>
      <input type="email" name="user_email">
    </div>
    <div>
      <label for="">Contraseña</label>
      <input type="password" name="user_pass">
    </div>
    <div>
      <label for="">Confirmación</label>
      <input type="password" name="user_pass_conf">
    </div>
    <div>
      <label for="">Estado</label>
      <select name="user_state" id="">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
      </select>
    </div>
    <div>
      <a href="?c=Dashboard">Cancelar</a>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>
</html>