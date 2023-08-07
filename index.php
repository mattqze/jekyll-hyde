<?php
  include('conf.php');
?>
<head>
    <title>Hyde</title>
    <link rel='stylesheet' href='/minima-dark-conv.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><header class="site-header">

  <div class="wrapper"><a class="site-title" rel="author" href="/">Tunnull's Blog</a></div>
</header>
<main class="page-content" aria-label="Content">
      <div class="wrapper">
        <div class="home">



  <ul class="post-list"><li>
    <?php
    include('posts.php');
    ?>

    </div>

      </div>
    </main><footer class="site-footer h-card">
  <data class="u-url" href="/"></data>

  <div class="wrapper">

    <div class="footer-col-wrapper">
      <div class="footer-col">
        <ul class="contact-list">
          <li class="p-name"><?php echo($authorName); ?></li>
          <li><a class="u-email" href="mailto:<?php echo($authorEmail); ?>"><?php echo($authorEmail); ?></a></li>
        </ul>
      </div>
      <div class="footer-col">
        <p><?php echo($blogDescription); ?></p>
      </div>
    </div>
  </div>
</footer>



</body>
