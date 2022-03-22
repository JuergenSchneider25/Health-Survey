<head>
    <title>example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E%22%3E"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
    <img src="/images/logo_n.svg" width="250" height= "150" title= "Logo Co."/>
</head>


<body>

    <?php include '<Inc/header.php' ?>

    <div>
        <p>RESULT</p>
    </div>



   <?php
    $dir = "images/";

    // Open & read 
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                echo "<img src='/images/" . $file . "' style='width:300px; height:300px'><br>";
            }
            closedir($dh);
        }
    }
    ?>

    <?php include 'Inc/footer.php' ?>

</body>