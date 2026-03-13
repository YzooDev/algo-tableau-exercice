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
        $somme = 0;
        foreach ($tableau as $key => $value) {
            $somme += $value;
            $moyenne = $somme / sizeof($tableau);
        }
        return $moyenne;
    };

    $bulleltinYoann = "<h1>Bulletin Scolaire de Yoann</h1><ul>";

    foreach ($bulletinScolaire as $key => $value) {
        $bulleltinYoann .= "<li>".$key." : ".$value."</li>";
    };
    $bulleltinYoann = $bulleltinYoann."<li>Moyenne Générale : ".(round(moyenne($bulletinScolaire), 2))."</li></ul>";

    function moyenneClasse($tableau) {
        foreach ($tableau as $key => $value) {
            return moyenne($tableau[$key]);     
        }
    }

    $moyenneClasse = "<h1>Moyenne de la Classe</h1>
    <ul>";

    $sommeMoyenneEleve = 0;
    $nombreEleve = 0;
    
    foreach ($noteEleve as $key => $value) {
        $moyenneClasse .= "<li>".$key." : ".(round(moyenne($noteEleve[$key]), 2))."</li>";
        $sommeMoyenneEleve += moyenne($noteEleve[$key]);
        $nombreEleve = $nombreEleve + 1;
    }
    $moyenneGeneraleClasse = round(($sommeMoyenneEleve / $nombreEleve),2);
    $moyenneClasse = $moyenneClasse."</ul><h2> Moyenne Générale :".$moyenneGeneraleClasse."</h2>";

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