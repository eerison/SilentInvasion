<?php
echo 'index';

$file = $_GET['p'];

$pages = [
    'contact.php',
    'home.php'
];

//if(in_array($file, $pages))
    include $file;