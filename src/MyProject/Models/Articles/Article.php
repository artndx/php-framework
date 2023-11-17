<?php 

namespace MyProject\Models\Articles;

use MyProject\Models\ActiveRecordEntity;
use MyProject\Models\Users\User;
use MyProject\Services\Db;

class Article extends ActiveRecordEntity
{
    protected  $name;
    protected  $text;
    protected  $authorId;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function  getAuthorId():User
    {
        $db = Db::getInstance();
        $user = $db->query('SELECT * FROM `users` WHERE `id`=:id', [':id'=>$this->authorId], User::class);
        return $user[0];
    }
    public function setAuthorId(int $authorId)
    {
        $this->authorId = $authorId;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }
}

?>