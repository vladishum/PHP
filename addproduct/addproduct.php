<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="../JavaScript/TypeSwitcher.js"></script>
    <script type="text/javascript" src="../JavaScript/ErrorCheck.js"></script>
    <script type="text/javascript" src="../JavaScript/homePage.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <meta charset="utf-8">
  </head>
  <body>
   <form id="product_form" method="post" type="submit" action="addproductContr.php">
    <div class="header-fixed">
  		<div class="header-add">
        <div>
  			  <h1>Product Add</h1>
        </div>
            <div class="add-button-container">
        				<button type="submit" name="save" class="add-button">Save</button>
        		</div>
        		<div class="mass-delete-button-container">
        			   <button  type="button" name="cancel" onclick="homePage();" class="mass-delete-button">Cancel</button>
        		</div>
      </div>
    <hr />
    </div>

    <div class="product-add-container">
     <div class="product-add-first">

  	  <span>SKU</span> <input type="text" name="sku" id="sku"><span id="skuErr" class="msg-error"></span>
      <span>Name</span> <input type="text" name="name" id="name"><span id="nameErr" class="msg-error"></span>
      <span>Price($)</span> <input type="number" name="price" id="price" min="0" step="any"><span id="priceErr" class="msg-error"></span>

      <span>Type Switcher</span> <select id="productType" name="productType" onchange="typeSwitcher()">
                        <option value="0" style="display:none;" selected></option>
                        <option value="none" disabled>Type Switcher</option>
                        <option value="DVD">DVD</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Book">Book</option>
                     </select><span id="productTypeErr" class="msg-error"></span>
        </div>
        <div class="product-add-second">
              <div id="DVD" hidden>
                    <span>Size (MB)</span>&nbsp;&nbsp;<input name="size"  id="size" type="number" min="0" step="any"><span id="sizeErr" class="msg-error"></span><br />
                    <br /><span class="product-attribute">Please provide size in MB<span>
              </div>
              <div id="Furniture" hidden>
                    <span>Height (CM)</span> <input name="height" id="height" type="number" min="0" step="any"><span id="heightErr" class="msg-error"></span><br />
                    <br /><span>Width (CM)</span>&nbsp;&nbsp;<input name="width" id="width" type="number" min="0" step="any"><span id="widthErr" class="msg-error"></span><br />
                    <br /><span>Length (CM)</span> <input name="length" id="length" type="number" min="0" step="any"><span id="lengthErr" class="msg-error"></span><br />
                    <br /><span class="product-attribute">Please provide dimensions HxWxL format in CM</span>
              </div>
              <div id="Book" hidden>
                    <span>Weight (KG)</span> <input  name="weight"  id="weight" type="number" min="0" step="any"><span id="weightErr" class="msg-error"></span><br />
                    <br /><span class="product-attribute">Please provide weight in KG</span>
              </div>
          </div>
          <br />
          <span id="sameSku" class="msg-error" style="font-size: 15px"></span>
  	      </div>
        </form>
        <div class="footer">
      		<hr />
      		<p>Scandiweb Test assigment</p>
      	</div>
      </body>
</html>
