<?php
include_once "DVD.php";
include_once "Furniture.php";
include_once "Book.php";

/*class that handles selecting data from database and displaying the appropiate product cards sorted by the sku value
 on product list page*/
class SelectDB extends DBh {

//this funtion do all the job for selecting and displaying
public function getProducts() {

  $arraySku = array();//declare array for sorted sku values

  //SELECT section START. Select the appropiate data from the database for the appropiate product
  $sql1 = "SELECT product.sku, product.name, product.price, dvd.size FROM product, dvd WHERE product.sku = dvd.sku";
  $stmt1= $this->connect()->prepare($sql1);
  $stmt1->execute();
  $dbProduct1  =  $stmt1->fetchAll();

  $sql2 = "SELECT product.sku, product.name, product.price, furniture.height, furniture.width, furniture.length FROM product, furniture WHERE product.sku = furniture.sku";
  $stmt2= $this->connect()->prepare($sql2);
  $stmt2->execute();
  $dbProduct2 =  $stmt2->fetchAll();

  $sql3 = "SELECT product.sku, product.name, product.price, book.weight FROM product, book WHERE product.sku = book.sku";
  $stmt3= $this->connect()->prepare($sql3);
  $stmt3->execute();
  $dbProduct3 =  $stmt3->fetchAll();

  $sql4 = "SELECT product.sku FROM product";
  $stmt4= $this->connect()->prepare($sql4);
  $stmt4->execute();
  $dbProduct4 =  $stmt4->fetchAll();
  //SELECT section END

  //get sorted sku values
  foreach ($dbProduct4 as $product)
  {
      $arraySku[] = $product["sku"];
  }

  //This next section is displaying product cards in sorted order by the primary key in database which is the sku field
  foreach ($arraySku as $sortSku)
  {

      foreach ($dbProduct1 as $product) {

          if($sortSku == $product["sku"]) {
          $DVD = new DVD($product["sku"], $product["name"], $product["price"], $product["size"]);
          $DVD->displayProduct();
          break;
        }
      }

      foreach ($dbProduct2 as $product) {

          if($sortSku == $product["sku"]) {
          $Furniture = new Furniture($product["sku"], $product["name"], $product["price"], $product["height"], $product["width"], $product["length"]);
          $Furniture->displayProduct();
          break;
        }
      }

      foreach ($dbProduct3 as $product) {

          if($sortSku == $product["sku"]) {
          $Book = new Book($product["sku"], $product["name"], $product["price"], $product["weight"]);
          $Book->displayProduct();
          break;
        }
      }
   }
}
}
 ?>
