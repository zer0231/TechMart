<?php 
    class IndexController extends BaseController
    {
        public function index()
        {
            $this->view = 'home';
            $data = ['message' => 'Home Page'];
            $this->display($data);
        }
    }
?>