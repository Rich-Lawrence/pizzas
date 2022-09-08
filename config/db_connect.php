<?php 

//connect to DB
    $conn = mysqli_connect('localhost', 'barry', 'test1234', 'pizza');

//check connection
    if(!$conn){
        echo 'connection error' . mysqli_connect_error();
    }

?>