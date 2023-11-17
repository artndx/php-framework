<?php

namespace MyProject\Controllers;

use MyProject\Models\Articles\Article;
use MyProject\Models\Users\User;
use MyProject\View\View;
use MyProject\Models\Comments\Comment;

class CommentsController
{
    private $view;

    public function  __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }
    
    public function create(int $postId) 
    {
        $users = User::findAll();
        $this->view->renderHtml('articles/createComment.php', ['users' => $users,
                                                               'postId' => $postId]);
    }
    
    public function store(){
        $comment = new Comment;
        
        $comment->setPostId($_POST['postId']);
        $comment->setText($_POST['text']);
        $comment->setAuthorId($_POST['author']);

        $comment ->save();
        return header('Location: http://localhost:8080/frame/www/articles/'.$comment->getPostId());
    }

    public function update(int $id)
    {
        $comment = Comment::getById($id);
        $comment->setText($_POST['text']);
        $comment->save();
        return header('Location: http://localhost:8080/frame/www/articles/'.$comment->getPostId());
    }

    public function edit(int $id)
    {
        $users = User::findAll();
        $comment = Comment::getById($id);
        $this->view->renderHtml('articles/editComment.php', ['comment' => $comment, 'users'=> $users]);
    }

    public function delete(int $id)
    {
        $comment = Comment::getById($id);
        $comment->delete();
        return header('Location: http://localhost:8080/frame/www/articles/'.$comment->getPostId());
    }
}

?>