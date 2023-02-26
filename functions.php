<?php

$mysql = mysqli_connect("45.15.23.59", "root", "Sco@l@it123", "munteanuR-task");

$sku = mysqli_real_escape_string($mysql, $_REQUEST['sku']);
$name = mysqli_real_escape_string($mysql, $_REQUEST['name']);
$price = mysqli_real_escape_string($mysql, $_REQUEST['price']);
$type = mysqli_real_escape_string($mysql, $_REQUEST['type']);
$size = mysqli_real_escape_string($mysql, $_REQUEST['size']);
$height = mysqli_real_escape_string($mysql, $_REQUEST['height']);
$width = mysqli_real_escape_string($mysql, $_REQUEST['width']);
$length = mysqli_real_escape_string($mysql, $_REQUEST['length']);
$weight = mysqli_real_escape_string($mysql, $_REQUEST['weight']);

$sql = "INSERT INTO products (sku, name, price, type, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$type', '$size', '$height', '$width', '$length', '$weight')";
if($mysql->query($sql) === true){
    header ("Location: index.php");
}

$mysql->close();

?>