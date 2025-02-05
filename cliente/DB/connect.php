<?php


$conn= new mysqli('10.38.0.95', 'Echeverria', '321', 'crud_floric');

// $conn= new mysqli('localhost', 'root', '', 'crud_flor');



if(!$conn){
    die(mysqli_error($conn));
}


?>