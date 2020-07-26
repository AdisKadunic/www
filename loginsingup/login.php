<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="youtube";

    mysql_connect($host,$user,$password);
    mysql_select_db($db);

    id(isset($_POST['input-text'])){
        $uname=$_POST['input-text'];
        $password=$_POST['input-password'];
        
        $sql="select * from loginform where user='".$uname."'AND Password='".$password."'limit 1";

        $result=mysql_query($sql);

        if(mysql_num_rows($result)==1){
            echo " You have seccessfully logged in ";
        }
            else{
                echo "you have enterd incorect password ";
            }
    }

?>