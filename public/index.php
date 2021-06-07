<?php


$path = dirname(__DIR__);

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';

    if ($page === 'post.home') {
        require $path . '/Controller/PostController.php';
        $postController = new PostController();
        $postController->home();
    } elseif ($page === 'post.show') {
        require $path . '/Controller/PostController.php';
        $postController = new PostController();
        $postController->show();
    } elseif ($page === 'user.connect') {
        require $path . '/Controller/UserController.php';
        $userController = new UserController();
        $userController->connect();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require $path . '/Controller/ErrorController.php';
    $errorController = new ErrorController();
    $errorController->error($e);
}
