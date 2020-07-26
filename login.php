<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where user='".$uname."'AND Password='".$password."'limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo "Yuo have successfully logn in";
        exit();
    }
    else{
        echo "you have enterd incorect password";
        exit();
    }
}

?>