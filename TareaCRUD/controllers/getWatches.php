<?php 
include './model/Connection.php';

$query= $db->query("SELECT * from stock");
$watch = $query->fetchAll(PDO:: FETCH_OBJ);

?>