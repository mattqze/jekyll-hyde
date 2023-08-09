<?php
  include($_SERVER['DOCUMENT_ROOT'].'/global/config/config.php');
  $location = '/'.$defaultInstance;
?>
<head>
    <meta property="og:title" content=<?php echo('"'.$blogTitle.'"'); ?>  />
    <meta property="og:url" content=<?php echo("'https://'".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]); ?>/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content=<?php echo('"Visit '.$blogTitle.'"'); ?> />
    <meta name="theme-color" content="#FF0000">
    <meta http-equiv="refresh" content="0; url=<?php echo($location); ?>">
</head>