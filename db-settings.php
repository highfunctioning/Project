<?php
/**
 * Created by PhpStorm.
 * User: prasa
 * Date: 3/20/2017
 * Time: 12:39 PM
 */
$db_host = "sql9.freemysqlhosting.net"; //Host address (most likely localhost)
$db_name = "sql9173381"; //Name of Database
$db_user = "sql9173381"; //Name of database user
$db_pass = "R99eCtjt8h"; //Password for database user
$db_table_prefix = ""; // if the table prefix exists use this variable as a global


//following variable declaration is for next class :)
GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

/* Create a new mysqli object with database connection parameters */

$mysqli = new mysqli($db_host, $db_name, $db_user, $db_pass);
GLOBAL $mysqli;

if(mysqli_connect_errno()) {
    //display the reason for mysql connection error.
    echo "Connection Failed: " . mysqli_connect_errno();
    exit();

}else{
    //echo "Connection Successful";
}

?>
