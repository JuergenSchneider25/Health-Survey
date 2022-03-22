<!DOCTYPE html>
<html>

<head>
    <title> Umfrage zu Ernährung, Fitness und Sport</title>
    
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
   

    
</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>

    <?php include 'Inc/header.php' ?>

    <div class="title-hp">
        <h2>"Willkommen Bei <strong>"EMR RME"</strong></h2>
    </div>
    <div class="text-hp">
        <h3> Umfrage zur Ernährung, Fitness und Sport <a href="/index.php">Fill</a></h3>

    </div>

    <img src="/images/sport.jpg" width="550" height="350" title="sport" />

    <?php include 'Inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>

</html>