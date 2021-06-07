<?php

require 'Controller.php';

class UserController extends Controller
{
    private $viewRepertory = 'user/';

    public function connect(): void
    {
        $this->render($this->viewRepertory . 'connectionForm', []);
    }
}
