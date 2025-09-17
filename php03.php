<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 9.3</h1>
    <!-- Harjutus 09
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    function email(){
        echo'    <form action="#" method="get">
            Sisestage oma nimi <input type="text" name="nimi" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["nimi"])){
            $nimi = $_GET["nimi"];
            $nimi = mb_strtolower($nimi);
            $asenda = array(" ", "ä", "ö", "ü", "õ");
            $asendused = array(".", "a", "o", "y", "o");
            $email = str_replace($asenda, $asendused, $nimi);
            echo $email."@hkhk.edu.ee";
        }
    }
    email()
    ?>
    <h1>Harjutus 9.3</h1>
    <!-- Harjutus 09
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    date_default_timezone_set('Europe/Tallinn');
    function roppus(){
        echo'    <form action="#" method="get">
            Sisesta text <input type="text" name="roppus" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["roppus"])){
            $txt = $_GET["roppus"];
            $roppused = array("fuck", "fucking", "kurat", "noob", "shit");
            $asendus = "***";
            echo str_replace($roppused, $asendus, $txt);
        }
    }
    roppus()
    ?>
    <h1>Harjutus 9.2</h1>
    <!-- Harjutus 09
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    date_default_timezone_set('Europe/Tallinn');
    function punktid(){
        echo'    <form action="#" method="get">
            Sisesta sõna <input type="text" name="punktid" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["punktid"])){
            $sona = $_GET["punktid"];
            echo strtoupper(implode(".", str_split($sona)));
        }
    }
    punktid()
    ?>
    <h1>Harjutus 9</h1>
    <!-- Harjutus 09
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    date_default_timezone_set('Europe/Tallinn');
    function sonum(){
        echo'    <form action="#" method="get">
            Sisesta nimi <input type="text" name="sonum" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["sonum"])){
            $sonum = $_GET["sonum"];
            $sonumlwc = strtolower($sonum);
            $sonumucd = ucfirst($sonumlwc);
            echo "Tere, $sonumucd!";
        }
    }
    sonum()
    ?>
    <h1>Harjutus 8.2</h1>
    <!-- Harjutus 08
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    function aastaaeg(){
        date_default_timezone_set('Europe/Tallinn');
        echo'    <form action="#" method="get">
            Sisesta tänane kuupäev <input type="date" name="aaeg" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["aaeg"])){
            $kuupaev = new DateTime($_GET["aaeg"]);
            $kevad = new DateTime('20 March');
            $suvi = new DateTime('20 June');
            $sygis = new DateTime('22 September');
            $talv = new DateTime('21 December');
            switch(true){
                case $kuupaev >= $kevad && $kuupaev < $suvi:{
                    echo "Kevad: "."<br>".'<img src="https://f9.pmo.ee/SulCEZqrEo69UC3B5yvcHohZmJE=/1442x0/filters:format(webp)/nginx/o/2023/04/06/15241910t1hd101.jpg" style="width:150px;height:150px;" alt="#" />';
                    break;
                }
                case $kuupaev >= $suvi && $kuupaev < $sygis:{
                    echo "Suvi: "."<br>".'<img src="https://f9.pmo.ee/k-auF63-opGGSE_Jmr_a4HyeYnk=/1442x0/filters:format(webp)/nginx/o/2010/09/08/428986t1h822e.jpg" style="width:150px;height:150px;" alt="#" />';
                    break;
                }      
                case $kuupaev >= $sygis && $kuupaev < $talv:{
                    echo "Sügis: "."<br>".'<img src="https://images.delfi.ee/media-api-image-cropper/v1/774fc7d0-b90e-11eb-8bd4-378c79057da9.jpg" style="width:150px;height:150px;" alt="#" />';
                    break;
                }             
                default:{
                    echo "Talv: "."<br>".'<img src="https://rmk.ee/wp-content/uploads/2019/01/1-105_block.jpg" style="width:150px;height:150px;" alt="#" />';
                }   
            }
        }
    }
    aastaaeg();
    ?>
    <h1>Harjutus 8.1</h1>
    <!-- Harjutus 08
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    function koolia(){
        date_default_timezone_set('Europe/Tallinn');
        echo'    <form action="#" method="get">
            Sisesta tänane kuupäev <input type="date" name="kuupaev" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["kuupaev"])){
            $kuupaev = $_GET["kuupaev"];
            $end = new DateTime("09-06-2026");
            $prg = new DateTime($kuupaev);
            $tdiff = $end->diff($prg);
            $paevad = $tdiff->days;
            echo "Päevi jäänud: ".$paevad;
        }
    }
    koolia();
    ?>
    <h1>Harjutus 8</h1>
    <!-- Harjutus 08
    17.09.25
    Marcus Krutto -->
    <!-- kuupäev -->
    <?php
    date_default_timezone_set('Europe/Tallinn');
    echo date('d.m.y G:i')."<br>";
    function vanus(){
        date_default_timezone_set('Europe/Tallinn');
        echo'    <form action="#" method="get">
            Sisesta sünniaasta <input type="date" name="syna" required><br>
            <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["syna"])){
            $syna = $_GET["syna"];
            $d1 = substr($syna,0,4);
            $d2 = date('Y');
            $vanus = $d2 - $d1;
            echo "See aasta saate: $vanus. vanaks.";
        }
    }
    vanus();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>