<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>PHP KT</h1>
    <?php
    // Isikukood
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
    <?php
    // Valemid:
    echo "<br>";
    for ($i=1; $i <= 100 ; $i++) {
      echo "* ";
      if ($i%10==0){
        echo "<br>";
      }
    }
    ?>
    <?php
    // Valemid:
    echo'    <form action="#" method="get">
        <p>Sisestage mõõdud</p>
        Tollid: <input type="number" name="tollid" required><br>
        <input type="submit" value="Arvuta">
        </form>';
    if(isset($_GET["tollid"])){
    $tollid = $_GET["tollid"];
    $cm = $tollid*2.54;
    echo $tollid." on ".$cm." cm."."<br>";
    }
    ?>
    <?php
    // Tekst:
    echo '"Ääremärkused"'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
