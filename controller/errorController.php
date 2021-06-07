<?php

require 'Controller.php';

class ErrorController extends Controller
{
    private $viewRepertory = 'error/';

    public function error(\Exception $e): void
    {
        $this->render($this->viewRepertory . 'error' . $e->getMessage(), []);
    }
}
