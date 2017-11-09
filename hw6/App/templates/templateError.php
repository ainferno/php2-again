<html>
<head>
    <title>ERROR</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>

<div class="container">
    <h1>Sorry, error occurred while processing your data.</h1>
    <p>Error No.<?php echo $this->errorCode; ?></p>
    <p><?php echo $this->error; ?><p>
</div>

</body>
</html>