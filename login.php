<?php
include('login.html');
include('mysqlconnection.php');
if(isset($_POST['log'])){
$user_name = $_POST['user_name'];
$pass = sha1($_POST['password']);

try {
    $stmt = $db->prepare("INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$user_name', '$pass');");
    $stmt->execute();
    echo "<br> you are Registered";
}
catch( PDOException ){
    echo "<br> This user name has been taken";

}
}