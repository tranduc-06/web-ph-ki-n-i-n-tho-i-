<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> web mysqli</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <?php
                include("admincp/config/config.php");
                include("page/header.php");
                include("page/menu.php");
                include("page/main.php");
            ?>
        </div>
        <div class="clear"></div>

        <?php
            include("page/footer.php");
        ?>
    </body>
</html>