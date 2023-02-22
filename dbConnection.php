<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "project_artin_db";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}


global $connection;
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    echo "We have a problem with the db connection";
}


?>