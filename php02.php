<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 7.7</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function headmotted(){
      $alused = array("Jüri", "Mari", "Uku");
      $oeldised = array("armastab", "viskab", "tõmbab");
      $sihitised = array("mind.", "sind.", "teda.");
      echo array_rand(array_flip($alused))." ".array_rand(array_flip($oeldised))." ".array_rand(array_flip($sihitised));
    }
    headmotted();
    ?>
    <h1>Harjutus 7.6</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function isikukood(){
      echo'    <form action="#" method="get">
        Sisesta isikukood <input type="number" name="idkood" required><br>
        <input type="submit" value="Kontrolli">
    </form>';
      if(isset($_GET["idkood"])){
        $ikood = $_GET["idkood"];
        if (strlen($ikood) == 11){
          echo "Isikukood on korrektne, ";
        } else{
          echo "Kontrollige kas isikukood on õige";
        }
        if ($ik = substr($ikood,0,1)%2 == 0){
          echo " Naine ,";
        } else{
          echo " Mees ,";
        }
        $paev = substr($ikood,5,2);
        $kuu = substr($ikood,3,2);
        $aasta = substr($ikood,1,2);
        echo "Sünni aeg: $paev.$kuu.$aasta";
      }
    }
    isikukood();
    ?>
    <h1>Harjutus 7.5</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function ristkylik($kylga, $kylgb){
      $pindala =$kylga*$kylgb;
      echo $pindala;
    }
    ristkylik(5,10);
    ?>
    <h1>Harjutus 7.4</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function vhmik($a1, $a2, $s){
      for ($i=$a1; $i <= $a2; $i=$i+$s){
        echo $i;
      }
    }
    vhmik(2,20,3)
    ?>
    <h1>Harjutus 7.3</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function createUser($u){
      $lu = strtolower($u);
      echo $lu."@hkhk.edu.ee"."<br>";
      $p = substr(password_hash($u, PASSWORD_BCRYPT),7,7);
      echo "Password: ".$p;
    }
    createUser("Marcus");
    ?>
    <h1>Harjutus 7.2</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- uudis -->

    <?php
    function uudiskiri(){
      echo '    <div class="row">
      <div class="col-sm-2">
        <form action="#" method="get">
          <input type="text" placeholder="Liitu uudiskirjaga">
          <input type="submit" value="Liitu" class="btn btn-success">
        </form>
      </div>
    </div>';
    }
    uudiskiri();
    ?>

    <h1>Harjutus 7</h1>
    <!-- Harjutus 07
    10.09.25
    Marcus Krutto -->
    <!-- tervitus -->
    <?php
    function tervita($nimi="kylaline"){
      $tervitused = array("Tere hommikust", "Tervitus", "Hommik", "Õhtust", "Tsau", "Tere sõbrake");
      return array_rand(array_flip($tervitused))." $nimi!"."<br>";
    }
    echo tervita();
    ?>

    <h1>Harjutus 06.7</h1>
    <!-- Harjutus 06
    10.09.25
    Marcus Krutto -->
    <!-- poisid ja tüdrukud -->
    <?php
    $p = array("Juss", "Toomas", "Erki", "Reigo");
    $t = array("Maria", "Liisa", "Annika", "Janeli");

    for ($i=0; $i < count($t); $i++){
      echo $t[$i]." - ".$p[$i]."<br>"; 
    }
    ?>
    <h1>Harjutus 06</h1>
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
