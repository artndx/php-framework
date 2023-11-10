<?php
    require __DIR__.'/../header.php';
?>

<form action="http://localhost:8080/frame/www/articles/" method="POST">
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Text comment</label>
        <input type="text" class="form-control" id="exampleInputName" name ="name" value="<?=$article->getName();?>">
    </div>
    <div class="mb-3">
        <label for="select" class="form-label">Author article</label>
        <select name="author" id="select">
            <?php foreach($users as $user):?>
                <option value="<?$user->getId();?>"><?=$user->getNickname();?></option>
            <?php endforeach;?>
        </select>
    </div>
    <button type ="submit" class="btn btn-primary mt-3">Update</button>
</form>

<?php
require __DIR__.'/../footer.php';
?>