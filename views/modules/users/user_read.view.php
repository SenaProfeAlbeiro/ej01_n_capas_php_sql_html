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
  <h3>Consultar Roles</h3>  
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
      <tr>
          <td>admin</td>
          <td>123</td>
          <td>Albeiro</td>
          <td>Ramos</td>
          <td>1234567890</td>
          <td>profealbeiro2020@gmail.com</td>
          <td>Activo</td>
        <td>
          <a href="?c=Users&a=updateUser&idUser=1">Actualizar</a>
          <a href="?c=Users&a=deleteUser&idUser=1">Eliminar</a>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>