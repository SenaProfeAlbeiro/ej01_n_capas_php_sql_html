<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control</title>
</head>
<body>
  <div>
    <h1>Panel de Control</h1>
    <a href="?c=Logout">Cerrar Sesión</a>
  </div>
  <hr>
  <div>    
    <div>
      <h3>Roles</h3>
      <div>
        <a href="?c=Roles&a=createRol">Registrar Rol</a>
      </div>
      <div>
        <a href="?c=Roles&a=readRoles">Consultar Roles</a>
      </div>
    </div>
    <div>    
      <h3>Usuarios</h3>
      <div>
        <a href="?c=Users&a=createUser">Registrar Usuario</a>
      </div>
      <div>
        <a href="?c=Users&a=readUsers">Consultar Usuarios</a>
      </div>
    </div>    
  </div>
  <hr>
  <div>    
    <a href="?c=Dashboard">Inicio</a>
    <h2>Actualizar Usuario</h2>
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
        <input type="hidden" name="user_code" value="1">
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
        <a href="?c=Users&a=readUsers">Cancelar</a>
        <input type="submit" value="Actualizar">
      </div>
    </form>
  </div>
  <hr>
  <div>
    <h5>Realizado por: Albeiro Ramos, 2025.</h5>
  </div>
  <hr>
</body>
</html>