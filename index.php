<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <div class="header">header</div>
        <div class="sidebar">sidebar</div>
        <?php require("card2.php"); ?>
        <div class="item card">2</div>
        <div class="item card">3</div>
        <div class="item card">4</div>
        <div class="item card">6</div>
        <?php require("card2.php"); ?>
        <div class="item card">8</div>
        <div class="item card">9</div>
        <div class="item card">10</div>
        <div class="item card">11</div>
        <?php require("card.php"); ?>
        <?php require("card.php"); ?>

        
        <div class="footer">4</div>
    </div>
</body>
</html>
