<?php
require_once("../model/customers.php");
require_once("../model/employee.php");
require_once("../model/dataAccess.php");

if(!isset($_SESSION)) session_start();

$error = false;

if(isset($_SESSION["loggedIn"]))
{
    require_once("../view/index.php");
}
else if(isset($_REQUEST["username"]) && isset($_REQUEST["pssword"]))
{
    $found = getUsernameAndPassword($_REQUEST["username"],$_REQUEST["pssword"]);
    if($found != false)
    {
        $_SESSION["loggedIn"] = $found;
        require_once("../view/index.php");
    }
    else
    {
        $error = true;
        require_once("../view/login_view.php");
    }
}
else
{
    require_once("../view/login_view.php");
}

//AdminLogin
if(isset($_SESSION["adminLoggedIn"]))
{
    require_once("../view/admintools_view.php");
}
else if(isset($_REQUEST["username"]) && isset($_REQUEST["pssword"]))
{
    $found = getAdminUsernameAndPassword($_REQUEST["username"],$_REQUEST["pssword"]);
    if($found != false)
    {
        $_SESSION["adminLoggedIn"] = $found;
        require_once("../view/admintools_view.php");
    }
    else
    {
        $error = true;
        require_once("../view/login_view.php");
    }
}
else
{
    require_once("../view/login_view.php");
}

?>