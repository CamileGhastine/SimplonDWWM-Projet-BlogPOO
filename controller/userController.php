<?php

function connect()
{    
    ob_start();
    require dirname(__DIR__) . '/view/user/connectionForm.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}