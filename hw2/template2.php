<html>
<head>
    <title><?php echo $article[0]->Name.'.'; ?></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php if(isset($article)) { ?>
<h1><?php echo $article[0]->Title; ?></h1>
<p><?php echo $article[0]->Body; ?></p>
<?php } ?>

<p>Изменить новость:<p>
<div class="form-group">
<form action="article.php?id=<?php echo $article[0]->id; ?>" method="post"> 
    <input type="hidden" name="behaviour" value="update">
    <p>Название: <div class="form-group"><input type="text" name="Name" class="form-control"></div><p>
    <p>Заголовок: <div class="form-group"><input type="text" name="Title" class="form-control"></div<p>
    <p>Текст: <div class="form-group"><input type="text" name="Body" class="form-control"></div<p>
    <div class="form-group"><input type="submit" class="btn btn-primary"></div>
</form>
</div>

<div class="form-group">
<form action="index.php" method="post"> 
    <input type="hidden" name="behaviour" value="delete">
    <input type="hidden" name="id" value="<?php echo $article[0]->id; ?>">
    <div class="form-group"><button type="submit" class="btn btn-danger">Delete</button></div>
</form>
</div>

<a href="index.php"><button class="btn btn-default">Return</button></a>
</div>
</body>
</html>