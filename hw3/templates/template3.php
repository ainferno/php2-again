<html>
<head>
    <title>Admin</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>

<div class="container">
    <div>
        <form action="admin.php" method="post">
            <input type="hidden" name="behaviour" value="change2">
            <ul>
                <?php foreach($this->data['authors'] as $author) { ?>
                    <li>
                        <?php echo $author->Name; ?> 
                        <?php if($this->form == 'change') { ?>
                            <button name='id' value='<?php echo $author->id; ?>'>edit</button>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </form>
    </div>
    
    
    <?php if($this->form == 'nothing'){?>
        <div class="form-group">
            <form action="admin.php" method="post">
                <input type="hidden" name="behaviour" value="create">
                <button class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="form-group">
            <form action="admin.php" method="post">
                <input type="hidden" name="behaviour" value="change">
                <button class="btn btn-primary">Change</button>
            </form>
        </div>
    <?php } ?>
    
    <?php if($this->form == 'create') { ?>
        <br><br>
        <p>Добавить Автора:<p>
        <div class="form-group">
            <form action="admin.php" method="post"> 
                <input type="hidden" name="behaviour" value="createfin">
                <p>Имя: <div class="form-group"><input type="text" name="Name" class="form-control"></div><p>
                <div class="form-group"><input type="submit" class="btn btn-primary"></div>
            </form>
        </div>
    <?php } ?>
    <?php if($this->form == 'change2') { ?>
        <br><br>
        <p>Добавить Автора:<p>
        <div class="form-group">
            <form action="admin.php" method="post"> 
                <input type="hidden" name="behaviour" value="changefin">
                <input type="hidden" name="id" value="<?php echo $this->id; ?>">
                <p>Имя: <div class="form-group"><input type="text" name="Name" class="form-control"></div><p>
                <div class="form-group"><input type="submit" class="btn btn-primary"></div>
            </form>
        </div>
        <div class="form-group">
            <form action="admin.php" method="post"> 
                <input type="hidden" name="behaviour" value="deletefin">
                <input type="hidden" name="id" value="<?php echo $this->id; ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    <?php } ?>
    <?php if(!($this->form == 'nothing')) { ?>
        <div class="form-group">
            <form action="admin.php" method="post"> 
                <button class="btn btn-primary">Cancel</button>
            </form>
        </div>
    <?php } ?>
</div>

</body>
</html>