<?php 
define('TITLE', 'Logout');
define('PAGE', 'Logout');
include "dashbord_header.php";
session_unset();
session_destroy();
header("Location:http://localhost/OSMS/Admin/index.php");

?>

<?php include'dashbord_footer.php' ?>