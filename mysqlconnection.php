
<?php
$dns = 'mysql:host=localhost;dbname=users';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // this option for write arabic
    // there many other options
);
try {

    $db = new PDO($dns, $user, $pass, $options); // start a new connection

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch
(PDOException $e) {

    echo 'Failed' . $e->getMessage();
}

