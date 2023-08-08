<?php
//Blog Setup
$blogTitle = 'Tunnull\'s Blog';
$authorName = 'Tunnull';
$authorEmail = 'ttam@tunnull.xyz';
$instancing = false;

//Landing Instancing Setup
$instances = array(
    'hyde' => array(
        'Default',
        'This blog showcases Hyde and it\'s features.',
        'Public Branch',
        '/hyde-pub'
    ),
    'hyde-pri' => array(
        'Development',
        'This blog details developments in Hyde, an unofficial "port" of Jekyll to PHP. This version is Bleeding-Edge, meaning some bugs may appear.',
        'Bleeding Edge Branch',
        '/hyde-pri'
    ),
    'hyde-ann' => array(
        'Announcements',
        'This blog details annoucments for Hyde, like new updates and features.',
        'Semi-Bleeding Edge Branch',
        '/hyde-ann'
    )
);
?>