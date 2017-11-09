<html>
<head>
    <title>Page <?php echo $this->article->id; ?></title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $this->article->Name; ?></h1>
    <p><?php echo $this->article->Body; ?></p><br>
    <p>Автор: <?php echo $this->article->author()->Name; ?></p>
    <br><br><br><br><p>Изменить новость:<p>
    <div class="form-group">
    <form action="index.php?ctrl=User&action=Update&id=<?php echo $this->article->id; ?>" method="post"> 
        <input type="hidden" name="id" value="<?php echo $this->article->id; ?>">
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

    <div class="form-group">
    <form action="index.php?ctrl=User&action=Delete" method="post"> 
        <input type="hidden" name="behaviour" value="delete">
        <input type="hidden" name="id" value="<?php echo $this->article->id; ?>">
        <div class="form-group"><button type="submit" class="btn btn-danger">Delete</button></div>
    </form>
    </div>

    <a class="btn btn-default" href="index.php">Return</a>
</div>
</body>
</html>