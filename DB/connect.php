<?php

$conn= new mysqli('localhost', 'root', '', 'crud_flor');


if(!$conn){
    die(mysqli_error($conn));
}


?>