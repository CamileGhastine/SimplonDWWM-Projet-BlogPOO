<div class="card border-dark mb-3">
  <div class="card-header"><?= htmlspecialchars($post->getUser()) . ', le ' . $post->getDate() ?></div>
  <div class="card-body">
    <h4 class="card-title"><?= htmlspecialchars($post->getTitle()) ?></h4>
    <p class="card-text"><?= nl2br(htmlspecialchars($post->getContent())) ?></p>
  </div>
</div>
<p><a href="?page=post.home">Retour à la liste des articles</a></p>