<html>
<head>
    <title><?php echo $article['Name'].'.'; ?></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php if(isset($data)) { ?>
<h1><?php echo $article['Title']; ?></h1>
<p><?php echo $article['Body']; ?></p>
<?php } ?>

<a href="<?php echo __DIR__; ?>/index.php"><button class="btn btn-default">Return</button></a>
</div>
</body>
</html>