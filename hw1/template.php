﻿<html>
<head>
    <title>News</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>

<div class="container">
<?php if(isset($news)) { foreach($news as $article) { ?>
<a href="<?php echo __DIR__; ?>/article.php?id=<?php echo $article['id']; ?>">
<div class="card">
    <div class="card-header"><?php echo $article['Head'].':'; ?></div>
    <div class="card-body"><?php echo ' '.$article['Title']; ?><br><br></div>
</div>
</a>
<?php }} ?>

</div>
</div>

</body>
</html>