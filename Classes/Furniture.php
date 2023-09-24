<?php
//class DVD for product type DVD
class Furniture extends Product {

  protected $productType = "Furniture";
  private $Height;
  private $Width;
  private $Length;

  public function __construct ($SKU, $Name, $Price, $Height, $Width, $Length) {
    $this->SKU = $SKU;
    $this->Name = $Name;
    $this->Price = $Price;
    $this->Height = $Height;
    $this->Width = $Width;
    $this->Length = $Length;
  }

  public function getProductType() {
    return $this->productType;
  }

  public function setHeight($Height) {
    $this->Height = $Height;
  }

  public function getHeight() {
    return $this->Height;
  }

  public function setWidth($Width) {
    $this->Width = $Width;
  }

  public function getWidth() {
    return $this->Width;
  }

  public function setLength($Length) {
    $this->Length = $Length;
  }

  public function getLength() {
    return $this->Length;
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

    $sql2 = "INSERT INTO furniture (sku, height, width, length) VALUES (?,?,?,?)";
    $stmt2= $this->connect()->prepare($sql2);
    $stmt2->execute([$this->SKU, $this->Height, $this->Width, $this->Length]);

    return true;
  }
}

//function that displays the data for DVD product on product list page
public function displayProduct() {
echo <<<PCD
    <div class="product-card">
      <input type="checkbox" class="delete-checkbox">
      <p class="product-description">{$this->SKU}</p>
      <p class="product-description">{$this->Name}</p>
      <p class="product-description">{$this->Price} $</p>
      <p class="product-description">Dimensions: {$this->Height}x{$this->Width}x{$this->Length}</p>
    </div>
PCD;
}
}
?>
