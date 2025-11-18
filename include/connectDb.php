<?php

// For infinitefree's database (uncomment the code when using the infinitefree)
// $db_server = "sql102.byetcluster.com";
// $db_user = "if0_40438584";
// $db_pass = "2Sn9jFOn0Bcj";
// $db_database = "if0_40438584_flavorhub";

// For localhost's database 
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