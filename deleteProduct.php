<?php
include_once 'database.php';

if(isset($_POST['save'])){
    $checkbox = $_POST['delete'];
    for($i=0;$i<count($checkbox);$i++){
        $delete_id = $checkbox[$i];
        mysqli_query($mysql,"DELETE FROM products WHERE id='".$delete_id."'");
    }
}
header ("location: index.php");
?>