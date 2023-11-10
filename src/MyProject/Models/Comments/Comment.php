<?php 

namespace MyProject\Models\Comments;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;
use MyProject\Models\Articles\Article;


class Comment extends ActiveRecordEntity
{
    protected  $id;
    protected  $authorId;
    protected  $text;
    protected  $commentId;


    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getAuthorId(): User
    {
        return User::getById($this->authorId);
    }

    public function setAuthor(User $author)
    {
        $this->authorId = $author->getId();
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function getCommentId(): int
    {
        return $this->id;
    }
    public function setCommentId(int $id)
    {
        $this->id = $id;
    }
}

?>