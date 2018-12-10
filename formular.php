<?php
if (isset ($_POST["buton"]) ){
    $erori = array();
    $proceseaza = 0;
    $info1 = $_POST["info"];
    $cautare1 = $_POST["cautare"];
    $categorie1 = $_POST["categorie"];
    $satisfacere_pret1 = $_POST["satisfacere_pret"];
    $achizitie1 = $_POST["achizitie"];

if (!isset ($erori)) {
    $con = mysql_connect("localhost", "root", "");
    if (!$con){
        die ("Unable to connect to mySql".mysql_error());}
        echo "Connected to MySql<br>";
    mysql_select_db ("book", $con) or die ("Baza de date nu este".mysql_error());
    $insert = mysql_query ("INSERT INTO chestionar (id_chestionar, info, cautare, categorie, satisfacere_pret, achizitie) values (NULL, '$info1', '$cautare1', '$categorie1', '$satisfacere_pret1', '$achizitie1')") or die (mysql_error());
}

if (!is_array($info1)){
    $erori[] = 'Completeaza un cimp';
}

if (!is_array($cautare1)){
    $erori[] = 'Completeaza un cimp';
}

if (!is_array($categorie1)){
    $erori[] = 'Completeaza un cimp';
}

if (!is_array($satisfacere_pret1)){
    $erori[] = 'Completeaza un cimp';
}

if (!is_array($achizitie1)){
    $erori[] = 'Completeaza un cimp';
}

if ($proceseaza){}

echo '<br /><br><br />';
echo 'Va multumim pentru completarea chestionarului!';
echo '<br />';

if (isset ($erori)){
    foreach ($erori as $eroare){
    echo $eroare;
    echo '<br />';
    }
}
}

?>