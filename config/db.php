<?php
require 'constants.php';

try{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
}catch(Exeption $e){
    echo $e->getMessage();
}