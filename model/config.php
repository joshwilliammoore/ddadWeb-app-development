<?php

session_start();

define('DBSERVER','kunet');
define('DBUSER','k1745856');
define('DBPASS','Badpassword');
define('DBNAME','db_k1745856');
define('URL','http://kunet.kingston.ac.uk/k1409896/coursework/view/');

function callDB(){
    $dbhost=DBSERVER;
    $dbuser=DBUSER;
    $dbpass=DBPASS;
    $dbname=DBNAME;

    try{
        $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        }

}
?>