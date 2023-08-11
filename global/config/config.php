<?php
//Blog Setup
$blogTitle = 'User\'s Blog';
$authorName = 'User';
$authorEmail = 'user@example.com';
$defaultInstance = 'hyde-pub';
$blogTheme = 'catppuccin-mocha';
$instancing = true;

//Landing Instancing Setup
$instances = array(
    'hyde-pub' => array(
        'Default',
        'This blog showcases Hyde and it\'s features.',
        'Public Branch',
        '/hyde-pub'
    ),
    'hyde-pri' => array(
        'Example 1',
        'This blog showcases Hyde and it\'s features.',
        'Bleeding Edge Branch',
        '/hyde-pri'
    ),
    'hyde-ann' => array(
        'Example 2',
        'This blog showcases Hyde and it\'s features.',
        'Semi-Bleeding Edge Branch',
        '/hyde-ann'
    )
);
?>