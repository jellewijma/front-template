<?php
// Database logingegevens
$db_hostname = '127.0.0.1';
$db_username = 'admin';
$db_password = 'admin';
$db_name = 'template';

// Maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Als de verbinding niet gemaakt kan worden: geef een foutmelding
if (!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "ERRNO: " . mysqli_connect_errno() . " g<br>";
    echo "ERROR: " . mysqli_connect_error() . "<br>";
    exit;
}