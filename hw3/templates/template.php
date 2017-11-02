<html>
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
    <?php foreach($this->news as $article) { ?>
        <div class="card">
            <a href="article.php?id=<?php echo $article->id; ?>"><div class="card-header"><?php echo $article->Name; ?></div></a>
            <div class="card-body"><?php echo ' '.$article->Title; ?></div>
            <div class="card-body">Автор: <?php echo ' '.$article->author()->Name; ?></div>
        </div>
    
    <?php } ?>

<p>Добавить новость:<p>
<div class="form-group">
<form action="index.php" method="post"> 
    <input type="hidden" name="behaviour" value="create">
    <p>Название: <div class="form-group"><input type="text" name="Name" class="form-control"></div><p>
    <p>Заголовок: <div class="form-group"><input type="text" name="Title" class="form-control"></div><p>
    <p>Текст: <div class="form-group"><input type="text" name="Body" class="form-control"></div><p>
    <select name='author_id'>
        <?php foreach($this->authors as $author) { ?>
            <option value='<?php echo $author->id; ?>'><?php echo $author->Name; ?></option>
        <?php } ?>
    </select>
    <div class="form-group"><input type="submit" class="btn btn-primary"></div>
</form>
</div>
</div>

</body>
</html>