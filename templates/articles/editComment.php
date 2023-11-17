<?php

require __DIR__ . '/../header.php';
?>

<form action="http://localhost:8080/frame/www/articles/comment/update/<?=$comment->getId();?>" method="POST">

    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Comment text</label>
        <input type="text" class="form-control" id="exampleInputName" name="text" value="<?=$comment->getText();?>">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>


<?php
require __DIR__ . '/../footer.php';
?>