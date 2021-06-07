<?php



function findAll()
{
    $db = getDBConnection();

    $request = $db->query('SELECT id, title, LEFT(content, 150) as content, date, user FROM post');
    $request->setFetchMode(PDO::FETCH_ASSOC);

    $posts = $request->fetchAll();

    $request->closeCursor();

    return $posts;
}

function findOneById($id)
{
    $db = getDBConnection();

    $request = $db->prepare('SELECT * FROM post WHERE id=?');
    $request->execute([$id]);
    $request->setFetchMode(PDO::FETCH_ASSOC);

    $post = $request->fetch();

    $request->closeCursor();

    return $post;
}

function getDBConnection()
{
    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];
        return new PDO('mysql:host=localhost;dbname=blog', 'root', '', $options);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
