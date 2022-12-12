<?php 
require_once 'connection.php';
class AdminModel {
    public function AdminLog($username,$psw){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from AdminSineMkt where username='$username' and password='$psw' limit 1");
        $result=$stmt->fetch();
        return $result;
    }
}