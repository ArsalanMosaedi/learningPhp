<?php

try{
    $pdo = new PDO('mysql:localhost;dbname=newPHP','root','');
}catch(PDOException $e){
die('could not connect.');
}


require 'index-view.php';


?>