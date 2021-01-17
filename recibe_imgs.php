<?php 

for ($i=1; $i <=3; $i++) {
    $filename = $_FILES["foto".$i]["name"];
    $source   = $_FILES["foto".$i]["tmp_name"];

	//Verificando si existe el directorio de lo contarios lo creamos el Directorio
	$directorio = "filesImgs/";
	if (!file_exists($directorio)) {
	    mkdir($directorio, 0777, true);
	}


    $dir= opendir($directorio);
    $target_path = $directorio.'/'.$filename;

    if(move_uploaded_file($source, $target_path)) { ?>

    	<script type="text/javascript">
    		 location.href ="index.html";
    	</script>

    <?php    } else {
        echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
    }
    closedir($dir);
}

?>