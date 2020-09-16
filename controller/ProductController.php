<?php 
    class ProductController extends BaseController
    {
        private $model;
        public function ProductController()
        {
            $this->model = $this->loadModel('product');
        }
        public function showItem()
        {
            $this->view = 'home';  
            $products = $this->model->listProducts();
            $data = ['products'=>$products];
            $this->display($data);
        }

     
    }
    $obj = new ProductController;
   $obj->showItem();
?>