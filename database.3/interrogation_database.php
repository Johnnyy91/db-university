<?php

define("DB_SEVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_university");
define("DB_PORT", 8889);

$connection = new mysqli(DB_SEVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if( $connection && $connection->connect_error) {
    echo "Error" . $connection->connect_error;
    die();
}

$sql = "SELECT * FROM `students`";

if($result = $connection->query($sql)){
    
    if($result->num_rows > 0){
        
    while($n_students = $result->fetch_assoc()){
        echo "<h3>". $n_students['name'] . "  " . $n_students['surname']. " / " .$n_students['date_of_birth']. " / " . $n_students['email']. "</h3>"; 
    }
    }
}
?>