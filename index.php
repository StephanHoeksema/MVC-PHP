

<?php

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$author = 'Stephan Hoeksema';
$email = 's.hoeksema@windesheim.nl';

$users = [
    'Stephan',
    'Stefanie'
];

if($method === 'GET') {
    // afhandelen get request
    if ($request == '/') {
        require __DIR__ . '/views/index.view.php';
    }
} elseif ($method === 'POST') {
    // afhandelen post request
    die(var_dump('post'));
} else {
    // request method niet ondersteund - 404
    die(var_dump('404'));
}


