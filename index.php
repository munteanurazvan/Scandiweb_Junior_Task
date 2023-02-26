<?php
    include "parts/header.html";
    include 'database.php';
    include "classes/Product.php";
    include "classes/Book.php";
    include "classes/DVD.php";
    include "classes/Furniture.php";

$children = array();

foreach(get_declared_classes() as $class ){
    if(is_subclass_of( $class, 'Product' )){
        $children[] = $class;
    }
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
</head>
<body>
<form method="post" action="deleteProduct.php" id="deleteForm">
<div class="container border-bottom pb-2 my-5">
    <div class="row mt-2">
        <div class="col-6 p-0">
            <h2>Product list</h2>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a class="btn btn-success d-flex align-items-center" href="add-Product.php" role="button">ADD</a>
            &nbsp;
            <button type="submit" form="deleteForm" class="btn btn-danger" name="save">MASS DELETE</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="d-flex flex-row bd-highlight mb-3 flex-wrap">
            <?php
                $query = "SELECT * FROM products ORDER BY id ASC";
                $sql = mysqli_query($mysql, $query);
                $productCount = mysqli_num_rows($sql);
                if($productCount > 0){
                    while($row = mysqli_fetch_object($sql)){
                        $key= array_search("$row->type",$children);
                        $ourNewProduct = new $children[$key]();
                        $ourNewProduct->setValues("$row->id", "$row->sku","$row->name", "$row->price","$row->size", "$row->height",
                            "$row->width", "$row->length", "$row->weight");
                        echo $ourNewProduct->getCard();
                    }
                }
            ?>
        </div>
    </div>
</div>
</form>
<?php include 'parts/footer.html' ?>
</body>
</html>




