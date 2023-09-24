//function to handle the selection of product type on add product page
function typeSwitcher() {
  selectedType = document.getElementById("productType").value;
  document.getElementById(selectedType).hidden = false;
  document.getElementById(selectedType).disabled = false;
  document.getElementById("productTypeErr").innerHTML = "";
  document.getElementById("sizeErr").innerHTML = "";
  document.getElementById("heightErr").innerHTML = "";
  document.getElementById("widthErr").innerHTML = "";
  document.getElementById("lengthErr").innerHTML = "";
  document.getElementById("weightErr").innerHTML = "";

    if(selectedType != "DVD") {
      document.getElementById("DVD").hidden = true;
      document.getElementById("DVD").disabled = true;
    }
    if(selectedType != "Furniture"){
        document.getElementById("Furniture").hidden = true;
        document.getElementById("Furniture").disabled = true;
    }
    if(selectedType != "Book") {
          document.getElementById("Book").hidden = true;
          document.getElementById("Book").disabled = true;
        }
}
