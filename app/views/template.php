<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/app.css" /> 
    <script type="text/javascript" src="public/app.js"></script>
    <title>Cocktails</title>
</head>
<body>
    <?php  
        require_once('app/views/templates/header.php');
        require_once('app/views/templates/'.$bodyTemplate.'.php');
        require_once('app/views/templates/footer.php') ;
    ?>
</body>
</html>