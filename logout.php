<?php 
define('PAGE', 'Logout');
session_start();

session_unset();

session_destroy();

header ("Location:http://localhost/OSMS/index.php");


 ?>