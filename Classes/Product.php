<?php
include_once "DBh.php";

//abstract class for all the products
abstract class Product extends DBh {
  protected $SKU;
  protected $Name;
  protected $Price;
  protected $productType;

  protected abstract function getProductType();
  protected abstract function displayProduct();
  protected abstract function addProduct();

  //function that checks if sku value is already in database
  protected function checkSKU() {

    $sql = "SELECT sku FROM product";
    $stmt= $this->connect()->prepare($sql);
    $stmt->execute();
    $dbsku =  $stmt->fetchAll();

      foreach ($dbsku as $sku) {
        if($sku["sku"] == $this->SKU)
        {
        return false;
        break;
        }
    }
    return true;
  }

  public function setSKU($SKU) {
    $this->SKU = $SKU;
  }

  public function getSKU() {
    return $this->SKU;
  }

  public function setName($Name) {
    $this->SKU = $Name;
  }

  public function getName() {
    return $this->Name;
  }

  public function setPrice($Price) {
    $this->SKU = $Price;
  }

  public function getPrice() {
    return $this->Price;
  }

}
?>
