<?php
$con=  mysql_connect("localhost","root","");
mysql_select_db("umsit",$con);
$uname=$_POST['username'];
$pass=$_POST['password'];





$query= "select * from login where user='$uname' and pass='$pass'";
$rs=  mysql_query($query);
$msg='';
if(mysql_num_rows($rs)>0)
{
    header('location:Admin/welcome.php');
    
}
 else {
    $msg="user not found";
    echo $msg;
}


?>
