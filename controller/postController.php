<?php

require 'Controller.php';
require dirname(__DIR__) . '/Model/PostRepository.php';

class PostController extends Controller
{
    private $viewRepertory = 'post/';

    public function home(): void
    {
        $postRepository = new PostRepository;
        $posts = $postRepository->findAll();

        $this->render($this->viewRepertory . 'home', compact('posts'));
    }

    public function show(): void
    {
        $postRepository = new PostRepository;
        $post = $postRepository->findOneById($_GET['id']);

        $this->render($this->viewRepertory . 'show', compact('post'));
    }
}
