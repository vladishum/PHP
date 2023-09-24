//script that enables to pass data to the addproductContr.php without refreshing the page
$(document).ready(function(){
  $("#product_form").submit(function(event){
    event.preventDefault();
    var sku = $("#sku").val();
    var name = $("#name").val();
    var price = $("#price").val();
    var productType = $("#productType").val();
    var size = $("#size").val();
    var height = $("#height").val();
    var width = $("#width").val();
    var length = $("#length").val();
    var weight  = $("#weight").val();
    var save = $('[name="save"]').val();

    $("#sameSku").load("../addproduct/addproductContr.php",
      { sku: sku,
        name: name,
        price: price,
        productType: productType,
        size: size,
        height: height,
        width: width,
        length: length,
        weight: weight,
        save: save
      }
  );
  });
});
