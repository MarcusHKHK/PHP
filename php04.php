<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Palga võrdlus</h1>
    <!-- Harjutus 12
    17.09.25
    Marcus Krutto -->
    <!-- Sõiduaeg -->
    <?php
    $allikas = 'tootajad.csv';
    $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    $jrk = 1;
    while(!feof($minu_csv)){
	$rida = fgetcsv($minu_csv, filesize($allikas),';');
	$arv = count($rida); //rea väljade arv
	echo $jrk.'. '; //järjekorra number
	$jrk++;
	for($i = 0; $i<$arv; $i++){
		echo $rida[$i].' ';	
	}
	echo '<br>';
	
    }
    fclose($minu_csv);
    ?>
    <h1>Sõiduaeg</h1>
    <!-- Harjutus 12
    17.09.25
    Marcus Krutto -->
    <!-- Sõiduaeg -->
    <?php
    function soiduaeg(){
        echo'    <form action="#" method="get">
        <p>Sisestage algus ja lõpp aeg</p>
        Algus: <input type="time" name="aaeg" required><br>
        Lõpp: <input type="time" name="laeg" required><br>
        <input type="submit" value="Kontrolli">
        </form>';
        if(isset($_GET["aaeg"], $_GET["laeg"])){
            $aaeg = new DateTime($_GET["aaeg"]);
            $laeg = new DateTime($_GET["laeg"]);
            $erinveus = $aaeg->diff($laeg);
            $tunnid = $erinveus->h;
            $minutes = $erinveus->i;
            echo "Aja erinevus: $tunnid tundi ja $minutes minutit.";
        }
    }
    soiduaeg();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>