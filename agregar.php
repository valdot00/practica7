<?php
include("datos.php");
include("funciones.php");
if(conectarBase($host,$usuario,$clave,$base)){
if(isset($_POST["titulo"],$_POST["contenido"]) and $_POST["titulo"] !=" " and $_POST["contenido"] !=" " ){
$titulo = $_POST["titulo"];
$contenido = $_POST["contenido"];
$consulta = "INSERT INTO tablapost(id,titulo,contenido) VALUES('0','$titulo','$contenido')";
if(mysql_query($consulta)){
echo "<p>registro agregado.</p>";
}else{
echo "<p>no se agrego...</p>";
}
}else{
echo '<p>por favor, complete el <a href="formulario.html">formulario</a></p>';
}
}else{
echo "<p>servicio interrumpido</p>";
}
?>

