<?php
    $serverName = "serverName\sqlexpress"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

?>