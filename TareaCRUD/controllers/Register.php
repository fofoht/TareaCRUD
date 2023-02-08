<?php 

print_r($_POST);

if( empty($_POST["inputModel"]) || empty($_POST["inputRef"]) || empty($_POST["inputMm"]) || empty($_POST["inputAvailable"]) ){
    echo "Error need to fill the form.";
    exit();
}


$model = $_POST["inputModel"];
$ref = $_POST["inputRef"];
$mm = $_POST["inputMm"];
$available = $_POST["inputAvailable"];

require '../model/Connection.php';
$query= $db->prepare("INSERT INTO stock(models,ref,mm,available) VALUES(?,?,?,?);");
$result= $query->execute([$model,$ref,$mm,$available]);


if($result){
    header("Location: ../index.php");
}else{
 echo (" Register failed.");
}
?>