<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <meta charset="utf-8">

</head>

<body>
  <?php include 'Inc/header.php' ?>
  <?php include 'data-collector.php' ?>

  <div class="title-index">
    <p id="titleh">Umfrage zu “Ernährung, Fitness und Sport”</p>
  </div>
  
  <form action="page5.php" method="post" onsubmit="return validateQuestion('');">
        <label for="">Wählen sie aus</label>

        <p>Welche zusätzliche körperliche Aktivität
           betreibst du am meisten?</p>

        <input type="checkbox" id="q41" name="q41" value="q41">
        <label for="q41">Keine zusätzliche körperliche Aktivität</label><br>

        <input type="checkbox" id="q42" name="q42" value="q42">
        <label for="q42">Gewichte heben / Gehen</label><br>

        <input type="checkbox" id="q43" name="vehicle3" value="Boat">
        <label for="q43">Wandern</label><br>

        <input type="checkbox" id="q44" name="q44" value="q44">
        <label for="q44"> Joggen </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Rennen </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Schwimmen </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Tanzen </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Aerobics </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Pilates </label><br>

        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Team Sport </label><br>
        
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Andere </label><br><br>

        <button type="submit" class="next">Nächste</button><br><br>
        <a href="page3.php">Zurück</a>
        <p class="spacer"></p>
    </form>
  <?php include 'Inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>
</html>