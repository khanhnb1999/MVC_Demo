<?php


class Product extends Controller{
    function list(){
        $model = $this->model("SinhVienModel");
        $products = $model->getAllProduct();

        $this->view("products/list", [
            "Page"=>"news",
            "Number"=>count($products),
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "products" => $products
        ]);
    }

}


?>