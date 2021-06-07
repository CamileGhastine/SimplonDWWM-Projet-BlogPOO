<?php

class PostController
{
    public function home()
    {
        require dirname(__DIR__) . '/model/postRepository.php';
        $posts = findAll();

        render('home', compact('posts'));
    }

    public function show()
    {
        require dirname(__DIR__) .  '/model/postRepository.php';
        $post = findOneById($_GET['id']);

        render('show', compact('post'));
    }

    private function render($view, $datas)
    {
        extract($datas);

        ob_start();
        require dirname(__DIR__) .  '/view/post/' . $view . '.php';
        $content = ob_get_clean();

        require dirname(__DIR__) . '/view/base.php';
    }
}
