<?php

class Furniture extends Product {

    public function setValues($id, $sku, $name, $price, $size, $height, $width, $length, $weight){
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->weight = $weight;
    }

    public function getCard(){
        echo '<div class="card-body text-center border m-2" style="width: 15rem;">';
        echo '<input class="delete-checkbox d-flex justify-start" type="checkbox" name="delete[]" value='.$this->id.'>';
        echo '<p>'.$this->sku.'</p>';
        echo '<p>'. $this->name.'</p>';
        echo '<p>'.$this->price.'.00 $</p>';
        echo '<p>Dimension: '.$this->height.'x'.$this->length.'x'.$this->width.'</p>';
        echo '</div>';
    }
};

?>
