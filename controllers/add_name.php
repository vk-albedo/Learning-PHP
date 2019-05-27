<?php

App::get('database')->insertInto(
    'todos',
    ['description' => $_POST['name'],
        'completed' => 0]
);

header('Location: /');
