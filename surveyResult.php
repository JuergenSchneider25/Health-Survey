<!DOCTYPE html>
<html>

<head>
    <title>Umfrage zur Ernährung, Fitness und Sport</title>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>

    <?php include 'Inc/header.php' ?>

    <div><h1>Ihr Resultat zu Ihrer Umfrage!</h1><?php echo $_POST["name"]; ?></div>

    <?php
    session_start();

    
    $healthSurveyRes =  $_POST["heaSurveyRes"];

   
    $SESSION["heaSurveyRes"] = $healthSurveyRes;
    
    // test only
    $_SESSION["last-post"] = $_POST;

    echo "YOUR HEALTHY IS:" . $healthSurveyRes;
    echo "<br>";

    include "utils.php";

    //printheaSurveyRes();
    echo "<br>";
    echo "<br>";

    echo "" . $healthSurveyRes;
    echo "<br>";

    echo "<div style='width:50px; height:50px; background-color:$healthSurveyRes;'></div>";

    echo "<a href='surveyResult.php'>Next</a>";

    ?>

    <?php include 'Inc/footer.php' ?>

</body>
<script src="/js/validation.js"></script>
</html>