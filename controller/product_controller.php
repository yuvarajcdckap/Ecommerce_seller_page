<?php
 require 'model/product_model.php';
class productController {
    private $productModel;

    public function __construct() {
        $this->productModel = new productModel();
    }
    
    public function view(){
        return require 'view/view.php';
    }

    public function create(){
        $this->productModel->create($_POST,$_FILES);
        // var_dump($_POST);
        // var_dump($_FILES);
    }

    public function read(){
       $products =  $this->productModel->read();
        // var_dump($products);
       return require 'view/list.php';
    }

    public function edit($id){
        // var_dump($id);
      $products =  $this->productModel->edit($id);
       return require 'view/edit.php';
    }

    public function update($id){
        $this->productModel->update($id,$_POST,$_FILES);
    }

    public function delete($id){
        $this->productModel->delete($id);
    }
}