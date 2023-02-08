<?php 
include '../model/Connection.php';

$idWatch = $_GET['id'];

$query = $db->prepare("DELETE FROM stock WHERE id = ? ");
$result = $query->execute([$idWatch]);

if($result){
    header("Location: ../index.php");
}else{
    echo "Delete Failed.";
}

?>