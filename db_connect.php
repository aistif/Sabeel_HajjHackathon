<?php
$hosting = "localhost" ;
$DB_user = "root" ;
$DB_pass = "" ;
$DB_name = "Sabeel_HajjHackathon" ;

$con = $GLOBALS["___mysqli_ston"] = mysqli_connect($hosting, $DB_user, $DB_pass);
mysqli_select_db($GLOBALS["___mysqli_ston"], $DB_name) ;
mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES 'utf8'");
?>