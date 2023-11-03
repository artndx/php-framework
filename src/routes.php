<?php

return [
    '~^$~' => [\MyProject\Controllers\ArticlesController::class, 'main'],
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/update/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'update'],
    '~^articles/edit/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\Controllers\ArticlesController::class, 'add'],
    '~^articles/delete/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'delete'],
    '~^articles/store$~' => [\MyProject\Controllers\ArticlesController::class, 'store'],
    '~^articles/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create']
];

?>