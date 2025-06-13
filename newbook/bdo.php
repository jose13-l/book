<?php
try{
 require_once "bd.php";

$numero=$_POST['numero'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$age=$_POST['age'];

$rq= $pd->prepare("INSERT INTO stagiaire(numero,nom,email,age) VALUES(:numero,:nom,:email,:age)");
 $rq->bindParam(':numero',$numero,PDO::PARAM_INT);
 $rq->bindParam(':nom',$nom,PDO::PARAM_STR);
 $rq->bindParam('email',$email,PDO::PARAM_STR);
 $rq->bindParam(':age',$age,PDO::PARAM_INT);
 $rq->execute();
echo"succes";}
catch(PDOEXception $e){
    echo"errer".$e->getMessage();
 }


?>