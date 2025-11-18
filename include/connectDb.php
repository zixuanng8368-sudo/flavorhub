<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_database = "flavorhub";

// Attempt connection
try {
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_database);
}
catch (mysqli_sql_exception) {
    echo "Database connection error";
}

?>