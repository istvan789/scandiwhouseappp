<?php
namespace classes;
include_once ("classes/Prod.php");

$prod = new Prod();

/
$id = $prod->escape_string($_GET['id']);


$result = $prod->delete($id, 'productlist');

if ($result) {
	header("Location: ../index.php");
}
?>