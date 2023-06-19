<?php

require 'connection.php';

class productModel extends DB{

    public function create($data,$file) {
        $product_name = $data['name'];
        $product_sku = $data['sku'];
        $product_price = $data['price'];
        $brand = $data['brand'];
        $mfd=$data['mfd'];
        $stk_avl=$data['stk_avl'];
        $product_image=$file['image']['name'];
        $image=$product_image;

        if($image && $product_sku && $product_price){
            $imagePath="images/".$image;
            try
            {
                $sql = $this->db->prepare("INSERT INTO product_details (product_name, product_image,SKU, price, brand, manufacture_date,available_stocks) VALUES ('$product_name', '$imagePath', '$product_sku','$product_price', '$brand', '$mfd','$stk_avl')");
                $sql->execute();
                header('location:/list');
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            } 
        }
        else{
            echo 'please fill all the required fields';
        }
        move_uploaded_file($file["image"]["tmp_name"],$imagePath);
    }


    public function read() {
        $statement = $this->db->prepare("SELECT *  FROM product_details");
        $statement->execute();
        $details = $statement->fetchAll(PDO::FETCH_OBJ);
        return $details;
    }


    public function edit($id){
        $statement = $this->db->prepare("SELECT *  FROM product_details  WHERE id= $id");
        $statement->execute();
        $product = $statement->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }

    public function update($id,$data,$file){
        $product_name = $data['name'];
        $product_sku = $data['sku'];
        $product_price = $data['price'];
        $brand = $data['brand'];
        $mfd=$data['mfd'];
        $stk_avl=$data['stk_avl'];
        $product_image=$file['image']['name'];
        $image=$product_image;

        if($image && $product_sku && $product_price){
            $imagePath="images/".$image;
            try
            {
                $sql=$this->db->query("UPDATE product_details SET product_name = '$product_name', product_image = '$imagePath', SKU ='$product_sku', price = '$product_price', brand = '$brand', manufacture_date = '$mfd', available_stocks = '$stk_avl' WHERE ID = '$id'");
                header('location:/list');
            }
            catch (Exception $e) 
            {
                die($e->getMessage());
            }
        }
        else{
            echo 'please provide all the required fields';
        }
        move_uploaded_file($file["image"]["tmp_name"],$imagePath);
    }

    public function delete($id) {
        $statement = $this->db->prepare("DELETE FROM product_details WHERE id=$id");
        $statement->execute();
        header('location:/list');
    }
}