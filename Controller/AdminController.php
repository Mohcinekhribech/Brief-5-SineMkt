<?php
require_once 'Model/AdminModel.php';
class AdminController {
    private $username;
    private $psw;
    function Admin(){
    if(isset($_POST["test"])){
        $this->username = $_POST["username"];
        $this->psw = $_POST["password"];
        $test=new AdminModel;
        $row=$test->AdminLog($this->username,$this->psw);
        if(isset($row['username'])&&isset($row['password'])){
            if($this->username==$row['username']&&$this->psw==$row['password']){
            $_SESSION['user']=$row['username'];
            }
        }else{
            die('error');
    }
    }
    
    }
    function Logout(){
        unset($_SESSION['user']);
    }
}