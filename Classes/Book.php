<?php
//class for product type Book
class Book extends Product {
  protected $productType = "Book";
  private $Weight;

  public function __construct ($SKU, $Name, $Price, $Weight) {
    $this->SKU = $SKU;
    $this->Name = $Name;
    $this->Price = $Price;
    $this->Weight = $Weight;
  }

  public function getProductType() {
    return $this->productType;
  }

  public function setWeight($Weight) {
    $this->Weight = $Weight;
  }

  public function getWeight() {
    return $this->Weight;
  }

  //function that adds the data for the product type Book into database
  public function addProduct() {
    if ($this->checkSKU() == false)
    {
      echo "SKU value is already taken please provide different one.";
    }
    else {

    $sql1 = "INSERT INTO product (sku, name, price) VALUES (?,?,?)";
    $stmt1= $this->connect()->prepare($sql1);
    $stmt1->execute([$this->SKU, $this->Name, $this->Price]);

    $sql2 = "INSERT INTO book (sku, weight) VALUES (?,?)";
    $stmt2 = $this->connect()->prepare($sql2);
    $stmt2->execute([$this->SKU, $this->Weight]);

    return true;
  }
  }

//function that displays the data for Book product on product list page
public function displayProduct() {
echo <<<PCD
    <div class="product-card">
      <input type="checkbox" class="delete-checkbox">
      <p class="product-description">{$this->SKU}</p>
      <p class="product-description">{$this->Name}</p>
      <p class="product-description">{$this->Price} $</p>
      <p class="product-description">Weight: {$this->Weight} KG</p>
    </div>
PCD;
}
}
?>
