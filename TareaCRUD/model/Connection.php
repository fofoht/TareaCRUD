<?php 

$password = "";
$user = "root";
$name_db = "tienda";

try{
    $db= new PDO(
        'mysql:host=localhost;
        dbname='.$name_db,
        $user,$password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")

    );


} catch (Exception $e){
    echo "connection Fail: ".$e->getMessage();
}

?>