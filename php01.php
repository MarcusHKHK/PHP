<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 04</h1>
    <!-- Harjutus 03
    01.09.25
    Marcus Krutto -->
    <h4>Juubel</h4>
    <form action="#" method="get">
        Sisesta sünni aasta <input type="number" name="synniaasta" required><br>
        <input type="submit" value="Kontrolli">
    </form>
    <?php
    if(isset($_GET["syyniaasta"])){
        $vanus = 2025 - $_GET["synniaasta"]
        if($vanus%5 == 0){
            echo "Juubel";
        } else{
            echo "ei ole juubel";
        }
    }
    ?>
    <h4>Jagamine</h4>
    <form action="#" method="get">
        arv1 <input type="number" name="arv1" required><br>
        arv2 <input type="number" name="arv2" required><br>
        <input type="submit" value="jaga">
    </form>
    <?php
        if(isset($_GET["arv1"]) && isset($_GET["arv2"])){
            $arv1 = $_GET["arv1"];
            $arv2 = $_GET["arv2"];

            if($arv2==0){
                echo "Nulliga ei saa jagada!";
            } else{
                echo $arv1 / $arv2;
            }
        }
    ?>

    <h1>Harjutus 03</h1>
        <!-- Harjutus 03
        01.09.25
        Marcus Krutto -->
    <form action="#" method="get">
        a <input type="number" name="a" required><br>
        b <input type="number" name="b" required><br>
        h <input type="number" name="h" required><br>
        <input type="submit" value="arvuta">
    </form>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $h = $_GET["h"];
        $s = ($a + $b) /2*$h;

        echo "Traptetsi pindala: ".$s."<br>";
    ?>

    <h1>Harjutus 02</h1>
    <?php
    // Marcus Krutto
    // Harjutus 02
    // 01.09.25
    
    // Tehted
        $a1 = 7;
        $a2 = 5;

        printf("%d + %d = %d <br>", $a1, $a2, $a1+$a2);
        printf("%d - %d = %d <br>", $a1, $a2, $a1-$a2);
        printf("%d * %d = %d <br>", $a1, $a2, $a1*$a2);
        printf("%d jääk %d = %d <br>", $a1, $a2, $a1%$a2);
        printf("%d / %d = %0.2f <br>", $a1, $a2, $a1/$a2);
        echo "<br>";

    // Taisnurkne kolmnurk
        $a3 = 8;
        $p = $a1+$a2+$a3;
        $s = $a1 * $a2 / 2;
        echo "Ümbermõõt: ".$p."<br>";
        echo "Pindala: ".$s."<br>";

    ?>

    <h1>Harjutus 01</h1>
    <?php
    // Marcus Krutto
    // Harjutus 01
    // 01.09.25
    
    $nimi = "Marcus";
    $aasta = 2008;
    $tahtkuju = "ei tea";

    echo $nimi."<br>".$aasta."<br>".$tahtkuju;
    echo "<br>";
    echo '“It\'s My Life” – Dr. Alban';
    echo "<br>";
    echo "(\(\ <br>";
    echo "( -.-) <br>";
    echo "o_(\")(\")"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
