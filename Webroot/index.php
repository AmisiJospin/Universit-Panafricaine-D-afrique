<?php   
    session_start();
    define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
    define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
    
    require(ROOT ."Config/core.php");
    require(ROOT ."request.php");
    require(ROOT ."router.php");
    require(ROOT ."dispatcher.php");

    //echo $_SERVER["REQUEST_URI"];
    $dispatch = new Dispatcher();
    $dispatch -> dispatch();