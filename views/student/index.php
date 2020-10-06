<table cellspacing="10">
  <thead>
    <th align="left">#</th>
    <th align="left">Cédula</th>
    <th align="left">Nombre</th>
    <th align="left">Apellido</th>
    <th align="left">Correo</th>
    <th align="left"></th>
    <th align="left"></th>
  </thead>
  <tbody>
    <?php foreach ($students as $student) : ?>
      <tr>
        <td><?php echo $student->id; ?></td>
        <td><?php echo $student->identification; ?></td>
        <td><?php echo $student->name; ?></td>
        <td><?php echo $student->last_name; ?></td>
        <td><?php echo $student->email; ?></td>
        <td>
          <a href='estudiantes/editar?id=<?php echo $student->id; ?>'>Editar</a>
        </td>
        <td>
          <form action="/CRUD_SENA/estudiantes/eliminar" method="post">
            <input type="number" name="id" value="<?php echo $student->id; ?>" hidden>
            <input type="submit" value="Eliminar">
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>