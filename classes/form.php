<?php
include_once ("Prod.php");
include_once ("Validation.class.php");
include_once ("setout/header.inc.php");

$prod = new Prod();
$validation = new Validation();

if(isset($_POST['add_product']))
{
    
     $sku = $prod->escape_string($_POST['sku']);	
     $name = $prod->escape_string($_POST['name']);
     $price = $prod->escape_string($_POST['price']);
     $size = $prod->escape_string($_POST['size']);
     $weight = $prod->escape_string($_POST['weight']);
     $height = $prod->escape_string($_POST['height']);
     $width = $prod->escape_string($_POST['width']);
     $length = $prod->escape_string($_POST['length']);
     $dimension = $height . " x " . $width . " x " . $length;
            
        $msg = $validation->check_empty($_POST, array('sku', 'name', 'price'));

        if($msg != null) {
            echo $msg;		
        }	
        else { 
            $result = $prod->execute("INSERT INTO productlist (sku,name,price,size,weight,dimension) VALUES('$sku','$name','$price','$size','$weight','$dimension')");
            
    header("Location: ../index.php");
}}
?>	

