<?php
require 'config.php';
?>
<?php

$username=strip_tags($_POST["username"]);
$password=strip_tags($_POST["password"]);

//$username=str_replace("(",'$username');
//$password=str_replace("(",'password');

echo strlen($username);

$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);


$sql="SELECT username,password FROM t1 WHERE  username='$username' and password='$password'";

$res=mysqli_query($con,$sql);

if(!$rows=mysqli_fetch_assoc($res))
{
    header("location:profile2.php");
     die();
    }

else
{
    header("location:profile.php");
}

mysqli_close($con);
?>