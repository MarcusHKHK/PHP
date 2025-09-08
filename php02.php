<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <h1>Harjutus 06.2</h1>
    <!-- Harjutus 06
    08.09.25
    Marcus Krutto -->
    <!-- kolmega jagunevad -->
    <?php
    for($i=1; $i <= 100; $i++) { 
      echo $i." ";
      if ($i%10==0) {
        echo "<br>";
      }
    }

    ?>
    <!-- Kahanev -->
    <?php
    for ($i=10; $i >= 0 ; $i--) { 
      echo $i." ";
    }
    ?>

    <!-- Ruut -->
    <?php
    for ($i=1; $i <= 100 ; $i++) {
      echo "* ";
      if ($i%10==0){
        echo "<br>";
      }
    }
    ?>

    <!-- Read -->
    <?php
    for ($i=1; $i <= 10 ; $i++) { 
      echo  "*<br>";
    }
    for ($i=1; $i <= 10 ; $i++) { 
      echo  "*";
    }
    ?>


    <h1>Harjutus 06.1</h1>
    <!-- Harjutus 06
    08.09.25
    Marcus Krutto -->
    <?php
    for($i=1; $i <= 100; $i++) { 
      echo $i." ";
      if ($i%10==0) {
        echo "<br>";
      }
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
