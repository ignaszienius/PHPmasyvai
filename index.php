<?php

$autos1 = ["Marke" => "Audi", "Modelis" => "80", "Spalva" => "Raudona", "Metai" => "1990", ];
$autos2 = ["Marke" => "Audi", "Modelis" => "A4", "Spalva" => "Melyna", "Metai" => "2010", ];
$autos3 = ["Marke" => "Audi", "Modelis" => "A5", "Spalva" => "Zalia", "Metai" => "2017", ];
$autos = [$autos1, $autos2, $autos3];
$rageliai1 = ["Marke" => "iPhone", "Modelis" => "5", "Spalva" => "Juodas", "Pagaminimo metai" => "2009", ];
$rageliai2 = ["Marke" => "iPhone", "Modelis" => "5s", "Spalva" => "Juodas", "Pagaminimo metai" => "2011", ];
$rageliai3 = ["Marke" => "iPhone", "Modelis" => "SE", "Spalva" => "Sidabrinis", "Pagaminimo metai" => "2017", ];
$rageliai = [$rageliai1, $rageliai2, $rageliai3];
?>

<!DOCTYPE html>
<html>
<head>
    <title>9 Paskaita (PHP)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>PHP masyvai</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Marke</th>
                      <th>Modelis</th>
                      <th>Spalva</th>
                      <th>Metai</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  foreach ($autos as $auto) {
                  	echo "<tr>
                  	<td>" . $auto['Marke'] . "</td>
                  	<td>" . $auto['Modelis'] . "</td>
                  	<td>" . $auto['Spalva'] . "</td>
                  	<td>" . $auto['Metai'] . "</td>
                  	</tr>";
                  }
				  ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
