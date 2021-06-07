<div class="row">
    <?php foreach ($posts as $post) : ?>
        <div class="col-3">
            <div class="card border-dark mb-3">
                <div class="card-header"><?= htmlspecialchars($post->getUser()) . ', le ' . $post->getDate() ?></div>
                <div class="card-body">
                    <h4 class="card-title"><?= htmlspecialchars($post->getTitle()) ?></h4>
                    <p class="card-text"><?= nl2br(htmlspecialchars($post->getContent())) . ' ...' ?></p>
                    <p><a href="?page=post.show&id=<?= $post->getId() ?>">Voir plus ...</a></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>