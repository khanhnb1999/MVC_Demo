<?php include './mvc/views/layouts/header.php'; ?>
    <?php
        echo '<pre>';print_r($data);die;
        if(!empty($data['products'])){
            foreach($data['products'] as $product){
                echo $product['product_name']."<br />";
            }
        }
    ?>
<?php include './mvc/views/layouts/footer.php'; ?>