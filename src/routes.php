<?php

return [
    '~^$~' => [\MyProject\Controllers\ArticlesController::class, 'main'],
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/update/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'update'],
    '~^articles/edit/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/store$~' => [\MyProject\Controllers\ArticlesController::class, 'store'],
    '~^articles/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create'],
    '~^articles/delete/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'delete'],

    '~^articles/comment/update/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'update'],
    '~^articles/comment/edit/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'edit'],
    '~^articles/comment/store$~' => [\MyProject\Controllers\CommentsController::class, 'store'],
    '~^articles/comment/create/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'create'],
    '~^articles/comment/delete/(\d+)$~' => [\MyProject\Controllers\CommentsController::class, 'delete']
];

?>