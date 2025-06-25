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
    <h2>Consultar Roles</h2>
    <a href="?c=Users&a=createUser">Registrar Usuario</a>
    <br><br>
    <table border="1">
      <thead>
        <th>ROL</th>
        <th>CÓDIGO</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>IDENTIFICACIÓN</th>
        <th>EMAIL</th>
        <th>ESTADO</th>
        <th>ACCIONES</th>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?php echo $user->getRolCode(); ?></td>
            <td><?php echo $user->getUserCode(); ?></td>
            <td><?php echo $user->getUserName(); ?></td>
            <td><?php echo $user->getUserLastname(); ?></td>
            <td><?php echo $user->getUserId(); ?></td>
            <td><?php echo $user->getUserEmail(); ?></td>
            <td><?php echo $user->getUserState(); ?></td>
            <td>
              <a href="?c=Users&a=updateUser&idUser=<?php echo $user->getUserCode(); ?>">Actualizar</a>
              <a href="?c=Users&a=deleteUser&idUser=<?php echo $user->getUserCode(); ?>">Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <div>
    <h5>Realizado por: Albeiro Ramos, 2025.</h5>
  </div>
  <hr>
</body>

</html>