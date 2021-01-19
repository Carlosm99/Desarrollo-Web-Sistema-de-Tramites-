<?php
$serverName = "localhost\SQLEXPRESS";
$connectionInfo = array("Database"=>"itch");
$conn = sqlsrv_connect($serverName, $connectionInfo);
if($conn===false){
    echo "conexión no establecida.<br/ >";
    die(print_r( srlsrv_errors(), true));
}
?>