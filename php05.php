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
    	$arv = count($rida);
    	echo $jrk.'. ';
    	$jrk++;
    	for($i = 0; $i<$arv; $i++){
    		echo $rida[$i].' ';	
    	}
    	echo '<br>';
    
    }
    fclose($minu_csv);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>