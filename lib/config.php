<?php
/**
 * Created by PhpStorm.
 * User: klinten
 * Date: 9/19/2017
 * Time: 1:37 PM
 */

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "cobolt";

try
{
    $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}


include_once 'user.php';
$user = new USER($DB_con);