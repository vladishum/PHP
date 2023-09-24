<?php
include_once "Product.php";

//class DVD for product type DVD
class DVD extends Product {
  protected $productType = "DVD";
  private $Size;

  public function __construct ($SKU, $Name, $Price, $Size) {
    $this->SKU = $SKU;
    $this->Name = $Name;
    $this->Price = $Price;
    $this->Size = $Size;
  }

  public function getProductType() {
    return $this->productType;
  }

  public function setSize($Size) {
    $this->Size = $Size;
  }

  public function getSize() {
    return $this->Size;
  }

  //function that adds the data for the product type DVD into database
  public function addProduct() {
    if ($this->checkSKU() == false)
    {
      echo "SKU value is already taken please provide different one.";
    }
    else {

    $sql1 = "INSERT INTO product (sku, name, price) VALUES (?,?,?)";
    $stmt1= $this->connect()->prepare($sql1);
    $stmt1->execute([$this->SKU, $this->Name, $this->Price]);

    $sql2 = "INSERT INTO dvd (sku, size) VALUES (?,?)";
    $stmt2= $this->connect()->prepare($sql2);
    $stmt2->execute([$this->SKU, $this->Size]);

    return true;
  }
  }

//function that displays the data for DVD product on product list page
public function displayProduct() {
echo <<<PCD
    <div class="product-card">
      <input type="checkbox" name="proba" class="delete-checkbox">
      <p class="product-description">{$this->SKU}</p>
      <p class="product-description">{$this->Name}</p>
      <p class="product-description">{$this->Price} $</p>
      <p class="product-description">Size: {$this->Size} MB</p>
    </div>
PCD;
}
}
?>
