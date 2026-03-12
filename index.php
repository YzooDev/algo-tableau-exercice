<?php 
    $yoann = [12, 15, 8, 6, 20, 19];
    $bulletinScolaire = ["math" => 15, "français" => 12, "histoire-géo" => 8, "physique-chimie" => 18];
    $noteEleve = ["yoann" => [12, 15, 8, 6, 20, 19], "jeff" => [9, 5, 17, 16, 12, 13], "mathieu" => [20, 18, 8, 4, 15, 16]];

    $notesYoann = "<h1> Note de Yoann </h1><ul>";
    foreach ($yoann as $i => $value) {
        $notesYoann .= "<li> Note" .($i+1)." : ".($value-2)." </li>";
    };
    $notesYoann = $notesYoann."</ul>";

    function moyenne($tableau) {
l            $value .= $value;
        }
        return $value / sizeof($tableau);
    };

    $bulleltinYoann = "<h1>Bulletin Scolaire de Yoann</h1><ul>";

    foreach ($bulletinScolaire as $key => $value) {
        $bulleltinYoann .= "<li>".$key." : ".$value."</li>";
    };
    $bulleltinYoann = $bulleltinYoann."<li>Moyenne Générale : ".(round(moyenne($bulletinScolaire[$key]), 2))."</li></ul>";

    $moyenneClasse = "<h1>Moyenne de la Classe</h1>
    <ul> <li> yoann : sa_moyenne </li> ... </ul>
    <h2> Moyenne Générale : la_moyenne_de_la_classe </h2>";
    foreach ($noteEleve as $key => $value) {
        $moyenneClasse .= "<li>".$key." : ".moyenne($value)."</li>";
    }
    $moyenneClasse = $moyenneClasse."</ul><h2> Moyenne Générale :".moyenne($noteEleve[$key])."</h2>";

    include "./header.php"; 
?>   
    <main>
        <?php 
            echo $notesYoann;
            echo $bulleltinYoann;
            echo $moyenneClasse;
        ?>
    </main>
<?php include "./footer.php"; ?>