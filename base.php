<?php 
function bd()
{
try {
$bdd= new PDO('mysql:host=localhost;dbname=crebas','root','');

} catch (Exception $e) {
	$e->getMessage();
}
 return $bdd;
}
?>
