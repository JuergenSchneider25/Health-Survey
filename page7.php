<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <meta charset="utf-8">

</head>

<body>
  <?php include 'Inc/header.php' ?>
  <?php include 'data-collector.php' ?>
  

  <div class="title-index">
    <p id="titleh">Umfrage zu “Ernährung, Fitness und Sport”</p>
  </div>

  <form action="page8.php" method="post" onsubmit="return validateQuestion('number-text');">
    <label for="">Wählen sie eine Antwort:</label>
    <p>An einem typischen Tag: Wie viele deiner
      Malzeiten oder Snacks enthalten Protein?</p>
      
    <input type="number" name="number-text" id="number-text" class="form-control" style="max-width: 80px;">

    <input type="hidden" name="lastPageID" value="question-6">
    <p id="validation-warning" class="warning"></p>

    <button type="submit" class="btn btn-primary">Nächste</button>
    <a href="page6.php">Zurück</a>

    <p class="spacer"></p>
  </form>
  <?php include 'Inc/footer.php' ?>
</body>
<script src="/js/validation.js"></script>

</html>