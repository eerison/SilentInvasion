<?php
$uploaddir = './uploads/';
$uploadfile = $uploaddir . $_FILES['arquivo']['name'];

#validation
$type = $_FILES['arquivo']['type'];
//$type = mime_content_type($_FILES['arquivo']['tmp_name']);

#mime type
echo '--------------<br />';
//var_dump(mime_content_type($_FILES['arquivo']['tmp_name']));
echo $type;
echo '<br />--------------<br />';

if(!in_array($type, ['image/png','image/gif','image/jpeg'])) {
	echo 'format invalid!';
} else {
	
	#upload
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	    echo "Arquivo válido e enviado com sucesso.\n";
	} else {
	    echo "Possível ataque de upload de arquivo!\n";
	}
}

?>

<form method="post" enctype="multipart/form-data">
  <label>Arquivo</label>
  <input type="file" name="arquivo" />
  
  <input type="submit" value="Enviar" />
</form>