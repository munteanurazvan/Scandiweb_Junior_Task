<?php include 'parts/header.html';

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add product</title>
</head>
<body>
<div class="container border-bottom pb-2 my-5">
    <div class="row mt-2">
        <div class="col-6 p-0">
            <h2>Product list</h2>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <button type="submit" form="product_form" name="submit" class="btn btn-success pull-right">Save</button>
                &nbsp;
            <a class="btn btn-danger pt-2 pull-right" href="index.php" role="button">Cancel</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-4 p-0">
            <form action="functions.php" id="product_form" method="post">
                <p class="d-flex justify-content-between">
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku" placeholder="Must be unique">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="Integer only, no decimals">
                </p>
                <div class="form-group d-flex justify-content-between">
                    <label for="productType">Type switcher</label>
                    <select class="form-control w-50" name="type" id="productType">
                        <option>DVD</option>
                        <option>Book</option>
                        <option>Furniture</option>
                    </select>
                </div>
                <p class="d-flex justify-content-between">
                    <label for="size">Size(DVD)</label>
                    <input type="number" name="size" id="size" placeholder="Size for DVD">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="weight">Weight(Book)</label>
                    <input type="number" name="weight" id="weight" placeholder="Weight for Book">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="height">Height (CM)</label>
                    <input type="number" name="height" id="height" placeholder="Height for Furniture">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="width">Width (CM)</label>
                    <input type="number" name="width" id="width" placeholder="Width for Furniture">
                </p>
                <p class="d-flex justify-content-between">
                    <label for="length">Length (CM)</label>
                    <input type="number" name="length" id="length" placeholder="Length for Furniture">
                </p>

            </form>
        </div>
    </div>
</div>
<?php include 'parts/footer.html' ?>
</body>
</html>