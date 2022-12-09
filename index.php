<?php
require_once 'Controller/productController.php';
$action = new productController;
if(isset($_GET['a'])){
    if($_GET['a']=='add'){
      $action->addProduct();
    }
    if($_GET['a']=='delete'){
      $action->deleteProduct();
    }
    if($_GET['a']=='update'){
      $action->updateProduct();
    }
}


if(!isset($_GET['p'])){
    include 'view/index.php';
}else{
    if($_GET['p']=='h'){
       include 'view/index.php';
    }else if($_GET['p']=='ar'){
       include 'view/New_arrivals.php';
    }else if($_GET['p']=='f'){
       include 'view/Features.php';
    }else if($_GET['p']=='c'){
       include 'view/contact.php';
    }else if($_GET['p']=='b'){
       include 'view/blog.php';
    }else if($_GET['p']=='a'){
       include 'view/Admin.php';
    }else if($_GET['p']=='u'){
       include 'view/update.php';
    }
}



