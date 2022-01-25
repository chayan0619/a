<?php

$host = 'webapp1-server1.mysql.database.azure.com';
$username = 'server1';
$password = 'Chayan@1999';
$db_name = 'webapp1';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'webapp1-server1.mysql.database.azure.com', 'server1', 'Chayan@1999', 'loginsystem', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>
