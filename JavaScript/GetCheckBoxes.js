//function that deletes checked product cards from product list page on client side and sends array of sku values
//which will be used for deleting appropriate data in database
function deleteElement(){
  var s=0;
  var sku=[];
    $('.delete-checkbox').each(function(){
      if($(this).is(":checked"))
      {
        sku[s] = $(this).next().html();
        $(this).parent().remove();
        s++;
      }
    })

    var massdelete = $("#delete-product-btn").val();

    $("#load").load("juniortest.vladimir.shumanskiContr.php",
    {
      sku: sku,
      massdelete: massdelete
    });
}
