<?php ob_start();?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        你沒資格瀏覽此網頁!<br>
        網頁將在三秒後跳轉至登入頁面或<br>
        <a href="week5form.php">點選這裡</a>
        <?php
        header("Refresh:3;url=week5form.php")
        ?>
    </body>
</html>
<?php ob_flush(); ?>