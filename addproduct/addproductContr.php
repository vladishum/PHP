<?php
include_once "../Classes/DVD.php";
include_once "../Classes/Furniture.php";
include_once "../Classes/Book.php";

//IF the SAVE button is clicked do the following
if(isset($_POST["save"]))
{

        $sku = trim($_POST["sku"]);
        $name = trim($_POST["name"]);
        $price = trim($_POST["price"]);
        $productType = trim($_POST["productType"]);
        $size = trim($_POST["size"]);
        $height = trim($_POST["height"]);
        $width = trim($_POST["width"]);
        $length = trim($_POST["length"]);
        $weight = trim($_POST["weight"]);

/*Validation section START*/
        if(empty($sku)) {
          $skuErr = " *Please submit required data.";
        }
        else {
              $skuErr = "";
             }

        if(empty($name)) {
          $nameErr = " *Please submit required data.";
        }
        else {
              $nameErr = "";
             }

        if(empty($price)) {
          $priceErr = " *Please submit required data.";
        }
          else {
                $priceErr = "";
               }

        if(empty($size)) {
          $sizeErr = " *Please submit required data.";
        }
            else {
                  $sizeErr = "";
                 }

        if(empty($height)) {
          $heightErr = " *Please submit required data.";
        }
           else {
                 $heightErr = "";
                }

        if(empty($width)) {
          $widthErr = " *Please submit required data.";
        }
            else {
                  $widthErr = "";
                 }

        if(empty($length)) {
          $lengthErr = " *Please submit required data.";
        }
            else {
                  $lengthErr = "";
                 }

        if(empty($weight)) {
          $weightErr = " *Please submit required data.";
        }
            else {
                  $weightErr = "";
                 }

        if($productType == 0) {
          $productTypeErr = " *Please select type.";
        }
          else {
                $productTypeErr = "";
               }
/*Validation section END*/

/*Check what type of product is added if is selected from dropdown list*/
          if(isset($productType))
          {

            $selected = $_POST["productType"];

            //if DVD is selected then create object of type DVD and add its data to database and go to product list page
            if($selected == "DVD" && !empty($sku) && !empty($name) && !empty($price) && !empty($size))
            {

                  $DVD = new $selected($sku, $name, $price, $size);
                  if($DVD->addProduct() == true)
                      {
                          echo '<script>window.location.assign("../index.php");</script>';
                      }

            }

            //if Furniture is selected then create object of type Furniture and add its data to database and go to product list page
            if($selected == "Furniture" && !empty($sku) && !empty($name) && !empty($price) && !empty($height) && !empty($width) && !empty($length))
            {

                  $Furniture = new $selected($sku, $name, $price, $height, $width, $length);
                  if($Furniture->addProduct() == true)
                      {
                          echo '<script>window.location.assign("../index.php");</script>';
                      }

            }

              //if Book is selected then create object of type Book and add its data to database and go to product list page
            if($selected == "Book" && !empty($sku) && !empty($name) && !empty($weight))
             {

                  $Book = new $selected($sku, $name, $price, $weight);
                  if($Book->addProduct() == true)
                      {
                          echo '<script>window.location.assign("../index.php");</script>';
                      }
             }
          }
}
?>

<script>
//script for displaying error messages when submiting data
  var skuErr = "<?php echo $skuErr;?>";
  $("#skuErr").html(skuErr);
  var nameErr = "<?php echo $nameErr;?>";
  $("#nameErr").html(nameErr);
  var priceErr = "<?php echo $priceErr;?>";
  $("#priceErr").html(priceErr);
  var productTypeErr = "<?php echo $productTypeErr;?>";
  $("#productTypeErr").html(productTypeErr);
  var sizeErr = "<?php echo $sizeErr;?>";
  $("#sizeErr").html(sizeErr);
  var heightErr = "<?php echo $heightErr;?>";
  $("#heightErr").html(heightErr);
  var widthErr = "<?php echo $widthErr;?>";
  $("#widthErr").html(widthErr);
  var lengthErr = "<?php echo $lengthErr;?>";
  $("#lengthErr").html(lengthErr);
  var weightErr = "<?php echo $weightErr;?>";
  $("#weightErr").html(weightErr);
</script>
