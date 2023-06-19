<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">        
    <h1>Product details input form</h1>  
    <div class='form-section'>
        <form action="/store" method="POST" enctype="multipart/form-data">
            <div>
                <label for="">product Name</label>
                <input type="text" placeholder="productName" name="name">
            </div>
            <div>
                <label for="">productImage<span>*</span></label>
                <input type="file" placeholder="product_image" name="image" require>
            </div>
            <div>
                <label for="">product_SKU<span>*</span></label>
                <input type="text" placeholder="product_SKU" name="sku" require class='sku'>
            </div>
            <div>
                <label for="">product_price<span>*</span></label>
                <input type="number" placeholder="product_price" name="price" require>
            </div>
            <div>
                <label for="">Brand</label>
                <select name="brand" id="products" class='select'>
                    <option value="select">select</option>
                    <option value="dell">Dell</option>
                    <option value="lenovo">Lenovo</option>
                    <option value="apple">Apple</option>
                    <option value="acer">Acer</option>
                </select>
            </div>
            <div>
                <label for="">Manufacture Date</label>
                <input type="date" placeholder="Manufacture Date" name="mfd">
            </div>
            <div>
                <label for="">Stock Availablity</label>
                <input type="number" placeholder="Stock Availablity" name="stk_avl">
            </div>
            <button type="submit">Submit</button> <a class='list-link' href="/list">Go to products list page ➙</a>
        </form>
    </div>
</div>
    <!-- <script>
        document.getElementById("products").addEventListener("change", function(e) {
        document.getElementById("products").value = e.target.value;
    });
    </script> -->
</body>
</html>