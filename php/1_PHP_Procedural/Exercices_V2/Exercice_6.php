<!DOCTYPE html>
<html>

<style>
    form{
        border: 1px solid;
        margin: 20px;
        padding: 10px;
        text-align: center;
    }
</style>

<body>

    <form method="post">
        <label for="ine">INE :</label>
    <input type="text" name="ine" placeholder="Saisir votre INE">
        <input type="submit" name="submit" value="Valider">
    </form>


    <?php

    $etudiants =  [
        [
            'ine' => 111,
            'nom' => 'Josh',
            'matieres' => ['algo' => 14, 'dev' => 17, 'anglais' => 13]
        ],
        [
            'ine' => 222,
            'nom' => 'Ina',
            'matieres' => ['algo' => 9, 'dev' => 10, 'anglais' => 18]
        ]
    ];

    function getMention($avg)
    {
        if ($avg < 10) $mention = "Faible";
        elseif ($avg < 12) $mention = "Assez bien";
        elseif ($avg < 14) $mention = "Bien";
        else $mention = "Très bien";
        return $mention;
    }




    function getElement($ine)
    {
        $etudiants = $GLOBALS["etudiants"];
        $msg = 'L\'étudiant(e) n\'existe pas !';
        $result = '';

        foreach ($etudiants as $etudiant) {
                
            $name = $etudiant['nom'];

            if ($etudiant['ine'] == $ine) {
                $result = round(array_sum($etudiant['matieres']) / count($etudiant['matieres']));
                $msg = 'Bonjour, '. $name . " votre moyenne est de " . $result . '/20 Mention : ' . getMention($result);
            }
        }
        return $msg;
    }
    
    if (isset($_POST["submit"])) {
        $ine = $_POST['ine'];
        if (empty($ine)) {
            echo "Veuillez entrer l'ine de l'étudiant";
        } else {
            echo (getElement($ine));
        }
    }
    
    
    
?>

    <!-- // $message = "";

    function moyenne($valeurs)
    {
        return array_sum($valeurs) / count($valeurs);
    }
    // if (isset($_POST['submit'])) {
    // if (!empty($_POST['ine'])) {
    // if (array_key_exists($_POST['ine'], $etudiants)) {

    // $notedecimal = moyenne($etudiants[$_POST['ine']]);
    // print_r($notedecimal);
    // $moyenne = intval(moyenne($etudiants[$_POST['ine']]));
    // $note = $moyenne;


    // if ($moyenne > 16) {
    // $message = "L'étudiant a la moyenne : $moyenne/20 Très bien";
    // }
    // if ($moyenne < 16 && $moyenne>= 14) {
        // $message = "L'étudiant a la moyenne : $moyenne/20 Bien";
        // }
        // if ($moyenne < 14 && $moyenne>= 12) {
            // $message = "L'étudiant a la moyenne : $moyenne/20 Assez bien";
            // }
            // if ($moyenne < 12) { // $message="L'étudiant a la moyenne : $moyenne/20" ; // } // } else { // $message="L'étudiant(e) n'existe pas !" ; // } // } else { // $message="Veuillez entrer l'INE de l'étudiant" ; // } // } ?> -->



</body>

</html