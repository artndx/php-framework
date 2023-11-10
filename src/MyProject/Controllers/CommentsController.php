<?php

namespace MyProject\Controllers;

use MyProject\View\View;
use MyProject\Models\Articles\Article;

class CommentsController
{
    private $view;

    public function  __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    public function update(int $articleId)
    {
        $article = Article::getById($articleId);
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);        
        $article->save();
        $this->view->renderHtml('articles/view.php', ['article' => $article]);
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);
        $users = User::findAll();
        $this->view->renderHtml('articles/edit.php', ['article' => $article, 'users'=> $users]);
    }

    public function add(): void
    {
        
    }

    public function delete(int $articleId)
    {
        $article = Article::getById($articleId);
        $article->delete();
        $this->main();
    }
}
?>