<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\View\View;

class ArticlesController
{
    private $view;

    public function  __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    
    // public function create() 
    // {
    //     $users = User::findAll();
    //     $this->view->renderHtml('articles/create.php', ['users' => $users]);
    // }
    
    // public function store()
    // {
    //     $article = new Article::getById($articleId);
    //     $article->setName($_POST['name']);
    //     $article->setText($_POST['text']);
    //     $article->save();
    //     $this->view->renderHtml('articles/view.php', ['article' => $article]);
    // }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }

        $this->view->renderHtml('articles/view.php', ['article' => $article]);
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
        $author = User::getById(1);
        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Новое название статьи');
        $article->setText('Новый текст статьи');
        $article->save();
        $this->view->renderHtml('articles/view.php', ['article' => $article]);
    }

    public function delete(int $articleId)
    {
        $article = Article::getById($articleId);
        $article->delete();
    }
}

?>