<?php
require_once('autoload.php');
//include_once ("classes/Prod.php");
//include_once ("classes/Validation.class.php");
include_once ("setout/header.inc.php");
?>

<div id="msg"></div>

<form action="classes/form.php" id="product_form" name="product_form" class="p-2" method="POST">
                                        <div class="row mt-4">
                                            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                                                <div>
                                                <h4 class="text-primary">Product Add</h4>
                                                </div><br>
                                                <div>
                                                <button type="submit" name="add_product" class="btn btn-primary">Save</button>
                                                </div>
                                                <div>
                                                <a href="index.php" type="button" class="btn btn-warning">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                <hr>

        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="sku" class="col-form-label">SKU</label>
            <input type="varchar" name="sku" id="sku" class="form-control form-control-sm" placeholder="Enter SKU" required>
           
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-3">
             <label for="name" class="col-form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Enter Name of Product" required>
            
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="price" class="col-form-label">Price ($)</label>
            <input type="number" name="price" id="price" class="form-control form-control-sm" placeholder="Enter Price" required>
           
        </div>
        </div>
            <br>  
            <div class="form-group col-md-3">
                <label for="productType">Type Switcher</label>
                 <select class="form-control form-control-sm" id="productType" onchange="changeDropdown(this.value);" >
                    <option selected disabled value="TS">Type Switcher</option>
                    <option value="DD">DVD </option>
                    <option value="FT">Furniture </option>
                    <option value="BK">Book </option>
                </select>
            </div>
            
            <div class="form-group col-md-3 box" name="dvd" >
                    <label for="size">Size (MB)</label>
                    <input type="varchar" id="size" name="size" class="form-control form-control sm" placeholder="Please, provide size">
                    <small>Please provide size in MB format...</small>
                </div>

            <div class="form-group col-md-3 box" name="furniture" id="furniture">
                     <label for="height">Height (CM)</label>
                    <input type="varchar" id="height" name="height" class="form-control form-control sm" placeholder="Please, provide height">
                    <label for="width">Width (CM)</label>
                    <input type="varchar" id="width" name="width" class="form-control form-control sm" placeholder="Please, provide width">
                    <label for="length">Length (CM)</label>
                    <input type="varchar" id="length" name="length" class="form-control form-control sm" placeholder="Please, provide length">
                    <small>Please provide dimensions in HxWxL format...</small>
                </div>

                <div class="form-group col-md-3 box" name="book" id="book">
                    <label for="weight">Weight (KG)</label>
                    <input type="varchar" id="weight" name="weight" class="form-control form-control sm" placeholder="Please, provide weight">
                    <small>Please provide weight in KG format...</small>
                </div>

</form>


<hr>
<?php
include_once ("setout/footer.inc.php");
?>
