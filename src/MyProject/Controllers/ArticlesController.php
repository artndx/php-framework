<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\View\View;
use MyProject\Models\Comments\Comment;


class ArticlesController
{
    private $view;

    public function  __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function main(){
        $articles = Article::findAll();
        $this->view->renderHtml('articles/main.php',['articles'=>$articles]);
    }
    
    public function create() 
    {
        $users = User::findAll();
        $this->view->renderHtml('articles/create.php', ['users' => $users]);
    }
    
    public function store(){
        $article = new Article;
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['author']);
        $article ->save();
        return header('Location: http://localhost:8080/frame/www');
    }

    public function view(int $articleId)
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $comments = Comment::findAllComments($articleId);
        $this->view->renderHtml('articles/view.php', ['article' => $article,
                                                      'comments' => $comments]);
    }

    public function update(int $articleId)
    {
        $article = Article::getById($articleId);
        $article->setName($_POST['name']);
        $article->setText($_POST['text']);  
        $article->setAuthorId($_POST['author']);      
        $article->save();
        //$this->view->renderHtml('articles/view.php', ['article' => $article]);
        $this->view($articleId);
    }

    public function edit(int $articleId)
    {
        $article = Article::getById($articleId);
        $users = User::findAll();
        $this->view->renderHtml('articles/edit.php', ['article' => $article, 'users'=> $users]);
    }

    public function delete(int $articleId)
    {
        $article = Article::getById($articleId);
        if(Comment::findAllComments($article->getId()) != null)
        {
            $comments = Comment::findAllComments($article->getId());
            foreach($comments as $comment)
            {
                $comment->delete();
            }
        }
        $article->delete();
        $this->main();
    }
}

?>