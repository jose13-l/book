<?php
$host ='localhost';
$bd ='formation';
$user='root';
$pwd='';

try{
    $pd= new PDO("mysql:host=$host;bdname=$bd;charset=utf8",$user,$pwd);

echo"coretion";

}
catch(PDOException $e){
    echo " erreur de connexin :".$e->getMessage();
}
?>