<?php
include_once "DBh.php";

//class that handles the mass delete process from database
class DeleteDB extends DBh {
  private $sku = [];

//set the required property with the correct datatype
  public function __construct(array $sku) {
    $this->sku = $sku;
  }

//delete the selected products on list product page
  public function deleteProducts() {
    foreach($this->sku as $product)
      $this->delete($product);
  }

/*SQL query for deleting product in database. This function deletes row not just from table product but also deletes row
 in other table that has the same sku value because the database is set up in a way that the product table has primary key
 and other tables have foreign keys to it with same sku values. It is basicaly a one to one relation between the product
 table and each of the other tables. The other tables have constrain ON DELETE CASCADE so data will be automatically deleted
 from child table when row is deleted from parent table */ 
  public function delete($product) {
    $sql = 'DELETE FROM product WHERE sku="'.$product.'"';
    $stmt= $this->connect()->prepare($sql);
    $stmt->execute();
  }

}
 ?>
