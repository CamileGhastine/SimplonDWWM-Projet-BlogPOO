<?php

function error($e)
{
    ob_start();
    require dirname(__DIR__) . '/view/error/error' . $e->getMessage() . '.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}
