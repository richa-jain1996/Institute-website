<?php

if(isset($_REQUEST['p']))
{
    $key=$_REQUEST['p'].".php";
    $page=  scandir('view');
    if(in_array($key, $page))
    {
        include_once "view/$key";
    }
}
else
{
    include_once 'view/home.php';
}