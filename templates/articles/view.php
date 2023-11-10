<?php
    require __DIR__.'/../header.php';
?>
<div class="card mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getName()?></h5>
    <p class="card-text"><?=$article->getText();?></p>
    <p class="card-text"><?=$article->getAuthorId()->getNickname();?></p>
    <a href="http://localhost:8080/frame/www/articles/edit/<?= $article->getId() ?>" class="card-link">Update article</a>
    <a href="http://localhost:8080/frame/www/articles/delete/<?= $article->getId() ?>" class="card-link">Delete article</a>
    <a href="http://localhost:8080/frame/www/articles/addcomment/<?= $article->getId() ?>" class="card-link">Add comment</a>
  </div>
</div>

<?php
require __DIR__.'/../footer.php';