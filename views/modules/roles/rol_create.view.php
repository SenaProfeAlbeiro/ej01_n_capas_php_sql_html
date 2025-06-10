<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Control</title>
</head>
<body>
  <div>
    <div>
      <h1>Panel de Control</h1>      
      <div>
        <a href="?c=Logout">Cerrar Sesión</a>
      </div>
    <div>
    <br>
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
    <br>
    <hr>
    <div>
      <div>
        <a href="?c=Dashboard">Volver</a>
      </div>
      <div>
        <h3>Registrar Rol</h3>
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
    </div>
    <br>
    <hr>
    <div>
      <h5>Realizado por: Instructor Albeiro Ramos, 2025.</h5>
    </div>
    <hr>
  </div>
</body>
</html>
  
  
  