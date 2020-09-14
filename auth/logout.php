<?php
/*
 * @author ZIDANI ILYES | ZEROUAL WAIL ALLA EDDINE 
 */
session_start();

$_SESSION = array();

session_destroy();

header("location: login.php");