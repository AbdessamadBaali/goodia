<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Add.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inscription.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>GOOD!A</title>
</head>
<body>
    
    <?php
        include "controller/controller.php";

        $excute_app = new Controller_app();
        $excute_app->execute_app();

    ?>

    <script src="scriptJS/index.js"></script>

</body>
</html>