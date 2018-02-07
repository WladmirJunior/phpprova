<?php
/**
 * Created by PhpStorm.
 * User: wladmirjunior
 * Date: 07/02/18
 * Time: 19:05
 */

$databaseHost = '127.0.0.1';
$databaseName = 'prova_db';
$databaseUsername = 'root';
$databasePassword = 'root';
$port = 3306;
$mysqli = mysqli_connect("$databaseHost:$port", $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($mysqli) . PHP_EOL;

mysqli_close($mysqli);
?>