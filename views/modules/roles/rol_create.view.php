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
    <h2>Registrar Rol</h2>
    <form action="" method="POST">
      <div>
        <label for="">Nombre</label>
        <input type="text" name="rol_name">
      </div>
      <div>
        <a href="?c=Dashboard">Cancelar</a>
        <input type="submit" value="Enviar">
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