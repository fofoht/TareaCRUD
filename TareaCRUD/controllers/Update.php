<?php 


include '../model/Connection.php';

$id = $_POST['id'];
$model = $_POST["inputModel"];
$ref = $_POST["inputRef"];
$mm = $_POST["inputMm"];
$available = $_POST["inputAvailable"];


 $query = $db->prepare("UPDATE stock SET models = ?, ref = ?, mm = ?, available = ? WHERE id = ?");
 $result = $query->execute([$model,$ref,$mm,$available,$id]);

if($result){
    header("Location: ../Stock.php");
}else{
    echo "Data Update Failed.";
}

?>


