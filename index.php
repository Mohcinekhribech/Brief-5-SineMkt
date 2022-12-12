<?php
require_once 'Controller/productController.php';
require_once 'Controller/AdminController.php';
session_start();
$action = new productController;
$testLogin=new AdminController;
if(isset($_GET['a']) && isset($_GET['p'])){
    if($_GET['a']=='add'){
      $action->addProduct();
    }
    if($_GET['a']=='delete'){
      $action->deleteProduct();
    }
    if($_GET['a']=='update'){
      $action->updateProduct();
    }
    if($_GET['a']=='t'){
      $testLogin->Admin();
    }
    if($_GET['a']=='Logout'){
      $testLogin->Logout();
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
      if(isset($_SESSION['user'])){
         include 'view/Admin.php';
      }else{
         include 'view/index.php';
      }  
    }else if($_GET['p']=='u'){
       include 'view/update.php';
    }else if($_GET['p']=='l'){
       include 'view/login.php';
    }
}



