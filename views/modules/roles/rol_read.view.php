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
  <a href="?c=Users&a=createRol">Registrar Rol</a>
  <br><br>
  <table border="1">    
    <thead>
      <th>CÓDIGO</th>
      <th>NOMBRE</th>
      <th>ACCIONES</th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>admin</td>
        <td>
          <a href="?c=Users&a=updateRol">Actualizar</a>
          <a href="?c=Users&a=deleteRol">Eliminar</a>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>