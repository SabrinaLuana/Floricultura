<?php

<<<<<<< Updated upstream
$conn= new mysqli('10.38.0.95', 'Echeverria', '321', 'crud_floric');
=======
$conn= new mysqli('10.38.0.95','Echeverria','321','crud_flor');
// $conn= new mysqli('localhost', 'root', '', 'crud_flor');
>>>>>>> Stashed changes


if(!$conn){
    die(mysqli_error($conn));
}


?>