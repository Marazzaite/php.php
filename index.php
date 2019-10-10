<?php
// ERROR REPORTING

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
include "app/php/php.php";


 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">

    <link rel="stylesheet" href="./assets/CSS/style.CSS">


    <style media="screen">
      .spalva1 {
        background-color: rgb(<?php print $spalva1; ?>);
      }
      .spalva2 {
        background-color: rgb(<?php print $spalva2; ?>);
      }
      .spalva3 {
        background-color: rgb(<?php print $spalva3; ?>);
      }
      .spalva4 {
        background-color: rgb(<?php print $spalva4; ?>);
      }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/first.php">First</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./app/views/second.php">Second</a>
            </li>
        </ul>
    </div>
</nav>
<section>
  <p class="spalva1">Suma: <?php print $sumasprendimas; ?></p>
  <p class="spalva2">Dalyba: <?php print $dalybasprendimas; ?></p>
  <p class="spalva3">Saknis: <?php print $saknissprendimas; ?></p>
  <p class="spalva4">Laipsnis: <?php print $laipsnissprendimas; ?></p>
</section>
<p>Cia yra pagrindinis index.html</p>
<!-- lentele -->
<table class="border">
  <thead >
    <th></th>
  <?php foreach ($auto as $key => $value): ?>
  <th colspan="2"><?php print $key; ?></th>
  <?php endforeach; ?>
  </thead>
  <tbody>
    <tr>
      <td></td>
    <?php foreach ($auto as $key => $value): ?>
        <td><?php print $value[0]["model"]; ?></td>
        <td><?php print $value[0]["fuel"]; ?></td>
        <?php endforeach; ?>
          </tr>
          <tr>

        <td></td>
      <?php foreach ($auto as $key1 => $value1): ?>
        <td><?php print $value[1]["model"]; ?></td>
        <td><?php print $value[1]["fuel"]; ?></td>
  <?php endforeach; ?>
  </tr>
</tbody>
</table>
<?php print $tekstas; ?>
<main>
  <h1>Tekila:</h1>
  <?php foreach ($alkoholiai["Tekila"] as $key => $value): ?>


  <section class="card col-4">
    <img   src="<?php print $value["IMG"];?>" alt="">
    <h2><?php print $value["pavadinimas"];?></h2>
    <p><?php print $value["turis"];?></p>
    <p><?php print $value["kaina"];?></p>
    <p><?php print $value["laipsniai"];?></p>
    <p><?php print $value["kilmes salis"];?></p>

  </section>
<?php endforeach; ?>

  <h1>Degtine:</h1>
  <?php foreach ($alkoholiai["Degtine"] as $key => $value): ?>


  <section class="card col-4">
    <img   src="<?php print $value["IMG"];?>" alt="">
    <h2><?php print $value["pavadinimas"];?></h2>
    <p><?php print $value["turis"];?></p>
    <p><?php print $value["kaina"];?></p>
    <p><?php print $value["laipsniai"];?></p>
    <p><?php print $value["kilmes salis"];?></p>

  </section>
<?php endforeach; ?>
<h1>Alus(tamsus):</h1>
<?php foreach ($alkoholiai["Alus"]["Tamsus"] as $key => $value): ?>


<section class="card col-4">
  <img   src="<?php print $value["IMG"];?>" alt="">
  <h2><?php print $value["pavadinimas"];?></h2>
  <p><?php print $value["turis"];?></p>
  <p><?php print $value["kaina"];?></p>
  <p><?php print $value["laipsniai"];?></p>
  <p><?php print $value["kilmes salis"];?></p>

</section>
<?php endforeach; ?>

<section class="col-5 mx-auto">
  <form action="">
    <select class="form-control" id="exampleFormControlSelect1">
      <?php foreach ($jayParsedAry as $country): ?>
        <option value="<?php print $country["dial_code"]; ?>"><?php print $country["name"]; ?></option>
      <?php endforeach; ?>
    </select>

  </form>

</section>

</main>

<!--bootstrap js-->
<script src="./assets/js/jqery.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
