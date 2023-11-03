<?php

require __DIR__.'/../header.php';
echo '
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Text</th>
    <th scope="col">Author</th>
  </tr>
</thead>
<tbody>';
$i = 0;
foreach($articles as $article){
    echo '
    <tr>
      <th scope="row">'.++$i.'</th>
      <td><a href="http://localhost/frame/www/articles/'.$article->getId().'"> '.$article->getName().'</a></td>
      <td>'.$article->getText().'</td>
      <td>'.$article->getAuthor()->getNickname().'</td>
    </tr>';
}
echo '
    </tbody>
    </table> <a href="http://localhost/frame/www/articles/add">'.'Добавить новую статью';
include __DIR__ . '/../footer.php'; ?>