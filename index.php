<?php
session_start();
include_once "views/functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-md-12"></header>
    </div>
    <div class="row">
        <now class="col-md-12">
            <?php
            include_once "views/menu.php"
            ?>
        </now>
    </div>
    <div class="row">
        <section class="col-md-12">
            <?php
                    if(isset($_GET['page'])){
                        $page=$_GET['page'];
                        switch ($page){
                            case 1:
                                {echo "1";
                                breake;}

                            case 2:
                                {echo "2";
                                breake;}

                            case 3:
                                {echo "3";
                                breake;}

                        }
                    }
            ?>
        </section>
    </div>
</div>
</body>
</html>
