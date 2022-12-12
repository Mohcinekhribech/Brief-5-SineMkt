<?php
require_once 'connection.php';
class productModel {
    private $posts;
    public function addProductToDb($post){
        $conn=connect_to_db();
        $stmt=$conn->query("INSERT INTO product (productName,productPrice,productType,productPic) VALUES ('".$post['productName']."','".$post['productPrice']."','".$post['productType']."','".$post['productPic']."')");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from product where productId=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getProductsFromDb($type){
        $conn=connect_to_db();
        if($type){
            $stmt=$conn->query("select * from product where productType='$type';");
        }else{
            $stmt=$conn->query("select * from product;");
        }
        $result=$stmt->fetchAll();
        return $result;
    }
    public function deleteProductInDb($id){
        $conn=connect_to_db();
        $stmt=$conn->query("delete from product where productId= $id;");
    }
    public function updateProduitInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE product SET productName='".$post['productName']."',productType='".$post['productType']."',productPrice=".$post['productPrice']." , productPic='".$post['productPic']."' where productId=$id;");
        }else{
            $stmt=$conn->query("UPDATE product SET productName='".$post['productName']."',productType='".$post['productType']."',productPrice=".$post['productPrice']." where productId=$id;");
        }  
    }
}
