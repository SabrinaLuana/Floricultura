<?php

// $conn= new mysqli('10.38.0.83', 'luana', '321', 'crud_flor');
// $conn= new mysqli('10.38.0.95', 'Echeverria', '321', 'crud_flor');
$conn= new mysqli('localhost', 'root', '', 'crud_floric');



if(!$conn){
    die(mysqli_error($conn));
}


?>