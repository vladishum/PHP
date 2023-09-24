<?php
include_once "Classes/DeleteDB.php";

if(isset($_POST["massdelete"])) {

$sku = $_POST["sku"];

$delete = new DeleteDB($sku);
$delete->deleteProducts();
}

?>
