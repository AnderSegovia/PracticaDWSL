<?php
$servername="localhost";
$username="root";
$password="";


try{
    $conn = new PDO("mysql:host=$servername; dbname=veterinaria",$username,$password);
    $conn -> setAttribute(PDO ::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "conec bien";
}catch(PDOException $e){

}