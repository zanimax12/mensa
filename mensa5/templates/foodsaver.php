<ion-view style="background-color: rgb(117, 119, 194);" id="page1" title="Foodsaver">
    <ion-content class="has-header" padding="true">
        <ion-list style="">
        <?php 

//$datum = "2016-04-16";
$datum = date("Y-m-d");

$mysqli = new mysqli("172.18.0.171", "mensaDBuser", "passwort", "mensadb");
   
    
    $result = $mysqli->query("SELECT gericht.gerichtID, gericht.gericht_name FROM gericht where gericht.datum = '".$datum."'"); 
$i = 1;
while ($obj = mysqli_fetch_object($result)) {
        $name = substr($obj->gericht_name,0,-1*(strlen($obj->gericht_name)-strpos($obj->gericht_name,"(")));
        //printf ("%s <br>\n",$name);
        //$wertung = $obj->wertung;
        //if($wertung == "0"||$wertung == 0){
          //$wertung = "Keine Bewertungen";
        //} else {
         // $wertung = $wertung." von 5 Sterne";
        //}
        //echo("<a href=gericht_bewerten_formular.php?id=".$obj->gerichtID.">".$name ." bewerten</a><p>");
        switch($i){
        case 1:  echo('<ion-item style="" ui-sref="bewertung">'.$name.'</ion-item>');
        break;
        case 2:  echo('<ion-item style="" ui-sref="bewertung2">'.$name.'</ion-item>');
        break;
       case 3:  echo('<ion-item style="" ui-sref="bewertung3">'.$name.'</ion-item>');
        break;
          
        }
        $i++;

    }

//$getID = mysqli_fetch_array($result);
//echo(implode($getID));



            
            ?>
        </ion-list>
    </ion-content>
</ion-view>