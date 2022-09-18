<?php 
session_start();
$conn = mysqli_connect("eu-cdbr-west-03.cleardb.net","bfa8f0b1dce657","9ff87698","heroku_caa4546c7212293");

if (isset($_POST['delete-product-btn']))
{
    $all_sku = $_POST['prod_delete_sku'];
    $extract_sku = implode(',' , $all_sku);
   

    $query = "DELETE FROM productlist WHERE sku IN($extract_sku)";
    $query_run =  mysqli_query($con,$query);

    if($query_run)
    {
       $_SESSION['status'] = "Product Deleted";
        header("Location: ../index.php");
    }
    else{
        $_SESSION['status'] = "Product Not Deleted";
        header("Location: ../index.php");
    }
}
