<?php
class ProductModel extends DB{
    public $tableName = "products";

    public function getAllProduct(){
        $qr = "SELECT * FROM $this->tableName";
        $result = mysqli_query($this->con, $qr);
        $products = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $products[] = $row;
        }
        return $products;
    }

    public function getProduct($id){
        $qr = "SELECT * FROM $this->tableName WHERE product_id = $id";
        $result = mysqli_query($this->con, $qr);
       return mysqli_fetch_row($result);
    }
    public function insertProduct($product){

    }
    public function updateProduct($product, $id){
        
    }
    public function deleteProduct($id){
        
    }

}
?>