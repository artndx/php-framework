<?php 

namespace MyProject\Models\Comments;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;
use MyProject\Models\Articles\Article;
use MyProject\Services\Db;


class Comment extends ActiveRecordEntity
{
    protected  $postId;
    protected  $id;
    protected  $text;
    protected  $authorId;


    public function getPostId()
    {
        return $this->postId;
    }
    public function getText()
    {
        return $this->text;
    }
    public function getUserById()
    {
        $db = Db::getInstance();
        $user = $db->query('SELECT * FROM `users` WHERE `id`=:id', [':id'=>$this->authorId], User::class);
        return $user[0];
    }

    public function setPostId(int $postId)
    {
        $this->postId = $postId;
    }
    
    public function setText(string $text)
    {
        $this->text = $text;
    }
    public function setAuthorId(int $authorId){
        $this->authorId = $authorId;
    }

    public static function getTableName()
    {
        return 'comments';
    }
}

?>