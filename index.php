<?php
//Get Heroku ClearDB connection information
//$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["pass"];
//$cleardb_db = substr($cleardb_url["path"],1);
//$active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


require_once('autoload.php');
session_start();
include_once ("setout/header.inc.php");
?>
 <div class="container">
    <form action="includes/help.php" method="POST">

                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                <div>
                                <h4 class="text-primary">Product List!</h4>
                                </div>
                                <br>
                                <div>
                                <a href="addproduct.php" class="btn btn-primary">ADD</a>
                                </div>
                                <div>
                                <button type="submit" class="btn btn-warning" name="delete-product-btn" id="delete-product-btn" >MASS DELETE</button>
                                </div>
                            </div>
                        </div>

                 <hr>
     <div class="row gy-5">
                 <tbody>
                   <?php 
                   $prod = new Prod();
                 $query = "SELECT * FROM productlist ORDER BY id ASC";
                 $result = $prod->getData($query);
                       
                 if($result)
                 {
                     foreach($result as $row)
                     { 
                      ?> 
                         <div class="col-3 text-center">
                              <div class="p-3 border bg-light d-flex">
                              <input type="checkbox" name="prod_delete_sku[]" value="<?= $row['sku']; ?>">
                             <td><?= $row['sku'] ?></td><br>
                             <td><?= $row['name1'] ?></td><br>
                             <td><?= $row['price'] ?></td><br>
                             <td><?= $row['size'] ?></td><br>
                             <td><?= $row['weight'] ?></td><br>
                             <td><?= $row['dimension'] ?></td><br>
                             </div>
                        </div> 
                         <?php
                     }
                 }
                 else
                 {
                   echo "No Product Found";
                 }
                   ?>

                   </tbody>
                                 
                                <hr>  
                    </form> 
     </div>
 </div>

<?php
include_once ("setout/footer.inc.php");
?>
