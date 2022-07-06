<?php

// http://localhost/live/Home/Show/1/2

class Product extends Controller{
    function list($productId){
        //  echo '<pre>';
        //  print_r($productId);
        //  echo '</pre>';die;
        $model = $this->getModel("ProductModel");
        $products = $model->getAllProduct();
        $data = [
            "Page"=>"news",
            "Number"=>count($products),
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "products" => $products
        ];
        $this->view("products/list", $data);
    }

    public function detail($id){
        $model = $this->getModel("ProductModel");
        $product = $model->getProduct($id);
        $data = [
            "PageName"=>"Product Detail $id",
            "product" => $product
        ];
        $this->view("products/detail", $data);
    }

}
?>