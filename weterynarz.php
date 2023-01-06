<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" href="weterynarz.css">
</head>
<body>
    <div id="baner">
     <h1>GABINET WETERENARYJNY</h1>
    </div>

       <div id="lewy">
        <h2>PSY</h2>
<?php
//utworzenie zmiennych polaczeniowych

$server = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'weterynarz';

$conn = mysqli_connect($server,$user,$passwd,$dbname);

$sql = "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE `rodzaj`='1';";
$zapytanie = mysqli_query($conn,$sql);

while($wynik = mysqli_fetch_row($zapytanie)){
  echo $wynik[0]. " " . " ". $wynik[1] . " ". $wynik[2] . "<br>";
}

?>
        <h2>KOTY</h2>
<?php

$sql2 = "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE `rodzaj`='2';";
$zapytanie2 = mysqli_query($conn,$sql2);

while($wynik2 = mysqli_fetch_row($zapytanie2)){
  echo $wynik2[0]. " " .$wynik2[1] ." ". $wynik2[2] ."<br>";
}

?>
       </div>

         <div id="srodkowy">
          <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH </h2>
<?php

$sql3 = "SELECT `imie`, `telefon`, `szczepienie`, `opis` FROM `zwierzeta`;";
$zapytanie3 = mysqli_query($conn,$sql3);

while($wynik3 = mysqli_fetch_row($zapytanie3)){
  echo "Pacjent:". $wynik3[0]. "<br>".  "Telefon właściciela:". $wynik3[1] .",". "ostatnie szczepienie:". $wynik3[2]. ",". "informacje:". $wynik3[3]. "<hr>".  "<br>";
}


mysqli_close($conn);

?>          
         </div>

           <div id="prawy">
           <h2>WETERYNARZ</h2>
           <a href="logo.jpg"><img src="logo-mini.jpg"></a>
           <p>Krzysztof Nowakowski, lekarz weterynarii</p>
           <h2>GODZINY PRZYJĘĆ</h2>
           <table>
            <tr>
                <td>Poniedziałek</td>
                <td>15:00 - 19:00</td>
            </tr>
             <td>Wtorek</td>
             <td>15:00 - 19:00</td>
           </table>
           </div>
</body>
</html>