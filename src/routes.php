<?php

return [
    '~^$~' => [\MyProject\Controllers\ArticlesController::class, 'main'],
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/update/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'update'],
    '~^articles/edit/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
    '~^articles/store$~' => [\MyProject\Controllers\ArticlesController::class, 'store'],
    '~^articles/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create'],
    '~^articles/delete/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'delete'],

    '~^articles/updatecomment/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'update'],
    '~^articles/editcomment/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
    '~^articles/addcomment/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'add'],
    '~^articles/deletecomment/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'delete'],
    '~^articles/storecomment$~' => [\MyProject\Controllers\CommentsController::class, 'store']
];

?>