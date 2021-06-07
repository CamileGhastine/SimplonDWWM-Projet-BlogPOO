<?php

namespace App\Model;

require 'Entity/Post.php';
require 'Repository.php';

use App\Model\Entity\Post;
use App\Model\Repository;

class PostRepository extends Repository
{
    public function findAll(): array
    {
        $db = $this->getDBConnection();

        $request = $db->query('SELECT id, title, LEFT(content, 150) as content, date, user FROM post');
        $request->setFetchMode(\PDO::FETCH_CLASS, 'App\Model\Entity\Post');

        $posts = $request->fetchAll();

        $request->closeCursor();

        return $posts;
    }

    public function findOneById(int $id): Post
    {
        $db = $this->getDBConnection();

        $request = $db->prepare('SELECT * FROM post WHERE id=?');
        $request->execute([$id]);
        $request->setFetchMode(\PDO::FETCH_CLASS, 'App\Model\Entity\Post');

        $post = $request->fetch();
        $request->closeCursor();

        return $post;
    }
}
