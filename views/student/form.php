<form action="<?php if(isset($action)) echo $action ?>" method="POST">
  <table cellspacing="10">
    <?php if(isset($student)) : ?>  
      <tr>
        <td>id:</td>
        <td><input type="number" name="id" readonly value="<?php if(isset($student)) echo $student->id ?>"></td>
      </tr>
    <?php endif; ?>  
    <tr>
      <td>Cédula:</td>
      <td><input type="number" name="identification" max="9999999999" required value="<?php if(isset($student)) echo $student->identification ?>"></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><input type="text" name="name" maxlength="100" required value="<?php if(isset($student)) echo $student->name ?>"></td>
    </tr>
    <tr>
      <td>Apellido:</td>
      <td><input type="text" name="last_name" maxlength="100" required value="<?php if(isset($student)) echo $student->last_name ?>"></td>
    </tr>
    <tr>
      <td>Correo:</td>
      <td><input type="email" name="email" maxlength="100" required value="<?php if(isset($student)) echo $student->email ?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" value="Enviar"></td>
    </tr>
  </table>  
</form>