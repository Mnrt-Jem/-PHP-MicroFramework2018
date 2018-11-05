<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<h1><a href="index.php">Hello world</a></h1>


<div class="container">

    <div class="starter-template" style="text-align: center;">
        <?= $content; ?>
    </div>

</div><!-- /.container -->


</body>
</html>
