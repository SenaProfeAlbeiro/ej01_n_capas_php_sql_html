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
  <h3>Actualizar Rol</h3>
  <form action="" method="POST">
    <div>    
      <input type="hidden" name="rol_code" value="1">
    </div>
    <div>
      <label for="">Nombre</label>
      <input type="text" name="rol_name">
    </div>
    <div>
      <a href="?c=Dashboard">Cancelar</a>
      <input type="submit" value="Actualizar">
    </div>
  </form>
</body>
</html>