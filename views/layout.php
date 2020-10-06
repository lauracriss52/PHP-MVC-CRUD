<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD SENA</title>
</head>

<body>
  <h1><?php if(isset($title)) echo $title; ?></h1>
  
  <a href="/CRUD_SENA">Inicio</a>
  &nbsp;&nbsp;&nbsp;
  <a href="/CRUD_SENA/estudiantes">Listar estudiantes</a>
  &nbsp;&nbsp;&nbsp;
  <a href="/CRUD_SENA/estudiantes/crear">Crear estudiante</a>
  <br><br><br>

  <?php if(isset($content)) require_once $content ?>
</body>

</html>