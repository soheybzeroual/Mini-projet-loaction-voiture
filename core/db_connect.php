<?php
/*
 * @author ZIDANI ILYES | ZEROUAL WAIL ALLA EDDINE 
 */

require_once(__DIR__.  "/config.php");

$db_connection =  new mysqli(DATABASE_SERV, DATABASE_USER, DATABASE_PASS);

if ($db_connection->connect_error) {
  die("Connection failed: " . $db_connection->connect_error);
}