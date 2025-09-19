<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Failid 13 ja 14</h1>
    <!-- Harjutus 13 ja 14
    19.09.25
    Marcus Krutto -->
    <!-- Failid -->
    <?php

    function jpgfali(){
      echo '<form action="#" method="post" enctype="multipart/form-data">
      <input type="file" name="minu_fail"><br>
      <input type="submit" value="Lae üles!">
      </form>';
      if(!empty($_FILES['minu_fail']['name'])){
	      $sinu_faili_nimi = $_FILES['minu_fail']['name'];
	      $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
	      $faili_suurus = $_FILES['minu_fail']['size'];
	      $max_suurus = 10048576;
	      $faili_tyyp = $_FILES['minu_fail']['type'];
	      if($faili_suurus <= $max_suurus && $faili_tyyp=='image/jpeg' || $faili_tyyp=='image/jpg'){
	      	$kataloog = 'failid';
	      	$faili_koht = $kataloog.'/'.$sinu_faili_nimi;	//kontrollitava faili asukoht ja nimi
	      	if(!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $kataloog.'/'.$sinu_faili_nimi)){
	      		echo 'Faili üleslaadimine oli edukas'."<br>";	
	      	} else {
	      		echo 'Faili üleslaadimine ebaõnnestus'."<br>";
	      	}
	      } else {
	      	echo 'Faili ei laetud üles!'."<br>";
	      }
      }
      echo'    <form action="#" method="get">
        <p>Sisestage atribuudid.</p>
        Kõrgus (max 450, min 1): <input type="number" name="height" required min="1" max="450"><br>
        Laius (max 450, min 1): <input type="number" name="width" required min="1" max="450"><br>
        <input type="submit" value="Teosta">
        </form>';
      if(isset($_GET["width"], $_GET["height"])){
        $height = $_GET["width"];
        $width = $_GET["height"];
        $hnr = $height;
        $wnr = $width;
      }
      $kataloog = 'failid';
      $asukoht=opendir($kataloog);
      while($rida = readdir($asukoht)){
      	if($rida!='.' && $rida!='..'){
          echo '<a href="'.$kataloog.'/'.$rida.'"><img src="'.$kataloog.'/'.$rida.'" height="'.$hnr.'" width="'.$wnr.'"></a>'."<br>";
      	}
      }
    }
    jpgfali();
    ?>
    <!-- <h1>Palga võrdlus</h1>
    Harjutus 12
    17.09.25
    Marcus Krutto -->
    <!-- Sõiduaeg -->
    <?php
    // $allikas = 'tootajad.csv';
    // $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    // $jrk = 1;
    // while(!feof($minu_csv)){
    // 	$rida = fgetcsv($minu_csv, filesize($allikas),';');
    // 	$arv = count($rida);
    // 	echo $jrk.'. ';
    // 	$jrk++;
    // 	for($i = 0; $i<$arv; $i++){
    // 		echo $rida[$i].' ';	
    // 	}
    // 	echo '<br>';
    
    // }
    // fclose($minu_csv);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
