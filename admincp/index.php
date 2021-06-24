<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Admincp</title>
        <link rel="stylesheet" href="../css/admincp.css">
    </head>
    <body>
        <h3 class="title_admincp">Welcome to Admincp</h3>
        <div class="wrapper">
            <?php
                include("config/config.php");
                include("modules/header.php");
                include("modules/menu.php");
                include("modules/main.php");
                include("modules/footer.php");
            ?> 
            </div>
    </body>
</html>