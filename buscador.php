<?php
function quitar_tildes($cadena) {
$cade = $cadena;
$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã'","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹","Ñ","à","è","ì","ò","ù");
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","N","a","e","i","o","u");
$texto = str_replace($no_permitidas, $permitidas ,$cade);
return $texto;
}


$busca = strip_tags($_POST['q']);
$like = rtrim(ltrim($busca));

$searchs = explode(" ", $like);

if(isset($like) && strlen($like) >= 4) {
    $directory='pg/productos-representados';
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
       if (preg_match('/php/i', $archivo)){
		 $file =  $directory."/".$archivo;
		   
	$file_handle = fopen($file, "r");
	while (!feof($file_handle)) {
	   $line = fgets($file_handle);
	   $content = quitar_tildes(strtolower(strip_tags($line)));
	   //echo $content;
	   	   
foreach ($searchs as $search) {
    if (strstr($content, $search)) {
	
	$withoutExt = preg_replace("/\\.[^.\\s]{3,4}$/", "", $archivo);
	$found = str_replace("-"," ",$withoutExt);	
		
    $hightlight = preg_replace("/\w*?".preg_quote($search)."\w*/i", "<a href='?productos-representados=".$withoutExt."'>$0</a>", $content); 

?>

<li><?= $hightlight ?></li>

<?php	
			}
		}   
	}
	fclose($file_handle);   
        }
    }
    $dirint->close();
}else{
}
?>
