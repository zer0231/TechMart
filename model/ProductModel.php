<?php
// require_once("BaseModel.php");
    class ProductModel extends BaseModel
    {
    
        public function listProducts()
        {
            $st = $this->pdo->prepare("select * from products INNER JOIN vendors ON products.vendor_id = vendors.vendor_id");
            $st->execute();
            $products = $st->fetchall();
            return $products;
        }

    
    }
?>