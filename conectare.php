<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'examen';
//m-am conectat la baza de date 
$conectareBD = mysqli_connect($host, $user, $password, $database);


//verificare daca nu ne-am conectat la baza de date
if(!$conectareBD){
    die('Conectarea la baza de date nu a reusit!');
}
?>