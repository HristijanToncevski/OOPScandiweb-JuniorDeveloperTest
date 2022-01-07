<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <title>Product Add</title>
</head>
<body>
    <div class="header-div">
        <header class="header">
            <span>Product Add</span>
            <div class="btn-container">
                <button form="product_form" type="submit" name="save_product" value="Save">Save</button>
                <button type="reset" onclick="document.location='index.php'">CANCEL</button>
            </div>
            <hr>
        </header>
    </div>
    <div class="mainProductAdd">
        <form action="save_product.php" method="post" id="product_form">
            <div id="product-add">
                <span>
                    <label for="sku">SKU</label>
                    <input type="text" id="sku" name="sku">
                </span>
                <span>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                </span>
                <span>
                    <label for="price">Price ($)</label>
                    <input type="text" id="price" name="price">
                </span>
                <span>
                    <label for="productType">Type Switcher</label>
                    <select id="productType" name="productType">
                        <option value="" selected disabled hidden>Choose type</option>
                        <option value="DVD">DVD</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Book">Book</option>  
                    </select>
                </span>
                <div id="dynamicForm">
                    <span class ="allAtr dvd" style="display: none;">
                        <label for="size">Size (MB)</label>
                        <input type="text" id="size" name="size">
                    </span>
                    <span class ="allAtr furniture" style="display: none;">
                        <label for="height">Height (CM)</label>
                        <input type="text" id="height" name="height">
                    </span>
                    <span class ="allAtr furniture" style="display: none;">
                        <label for="width">Width (CM)</label>
                        <input type="text" id="width" name="width">
                    </span>
                    <span class ="allAtr furniture" style="display: none;">
                        <label for="length">Length (CM)</label>
                        <input type="text" id="length" name="length">
                    </span>
                    <span class ="allAtr book" style="display: none;">
                        <label for="weight">Weight (KG)</label>
                        <input type="text" id="weight" name="weight">
                    </span>
                    <p id="hint"></p>
                </div>                                
            </div>
        </form>
    </div>
    <div class="footer-div">
        <div class="footer">
            <hr>
            <p>Scandiweb Test assignment</p>
        </div>
    </div>

    <script>
        $("#productType").change(function(){
            $("#size").val("");
            $("#weight").val("");
            $("#height").val("");
            $("#width").val("");
            $("#length").val("");
        });
    </script>
    <script src="javascript/DynamicForm.js"></script>
    <script src="javascript/Validation.js"></script>
</body>
</html>