<?php
require_once 'connect.php';
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
$sql = "SELECT * FROM member WHERE username='$username' and password='$password'";
$result = mysql_query($sql) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
    echo "You are logged in";
}else {
    echo "Login Failed";
}
}
mysql_close();
?>
