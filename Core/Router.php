<?php

class router
{
    private $path;

    public function __construct()
    {
        $this->path = dirname(__DIR__);
    }

    public function run()
    {
        try {
            $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

            if ($page === 'post.home') {
                require $this->path . '/Controller/PostController.php';
                $postController = new PostController();
                $postController->home();
            } elseif ($page === 'post.show') {
                require $this->path . '/Controller/PostController.php';
                $postController = new PostController();
                $postController->show();
            } elseif ($page === 'user.connect') {
                require $this->path . '/Controller/UserController.php';
                $userController = new UserController();
                $userController->connect();
            } else {
                throw new Exception('404');
            }
        } catch (Exception $e) {
            require $this->path . '/Controller/ErrorController.php';
            $errorController = new ErrorController();
            $errorController->error($e);
        }
    }
}
