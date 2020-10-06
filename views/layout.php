<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/PHP-MVC-CRUD/public/index.css">
  <title>CRUD SENA</title>
</head>

<body>
  <div class="container">
    <div class="navbar">
      <a href="/PHP-MVC-CRUD">Inicio</a>
      <a href="/PHP-MVC-CRUD/estudiantes">Listar estudiantes</a>
      <a href="/PHP-MVC-CRUD/estudiantes/crear">Crear estudiante</a>
    </div>
    
    <h1><?php if (isset($title)) echo $title; ?></h1>
    
    <div class="content">
      <?php if (isset($content)) require_once $content ?>
    </div>
  </div>
</body>

</html>