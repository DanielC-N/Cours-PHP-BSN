<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOtre nom</title>
</head>
<body>
    <?php $listeEx1 = ["Jean Bond", "Jacque Bonpart", "Julie Xi", "Maurice Plotinet", "Miche Drucker", "Pierre foule"]; ?>
    <h1> Exercice 1 </h1>
    <!-- Debut du formulaire -->
    <form enctype="multipart/form-data" action="./TP2.php" method="post">
        <fieldset>
            <legend>Rechercher un nom parmis : <?= implode(", ",$listeEx1) ?></legend>
                <p>
                    <label>Entrez un nom</label>
                    <input type="input" name="nom" />
                    <input type="submit" name="submit" value="rechercher" />
                </p>
        </fieldset>
    </form>
    <!-- Fin du formulaire -->
    <?php
        function rechercheTab($tab, $str) {
            $res = "not found";
            // VOTRE CODE ICI
            return $res;
        }
        
        if(!empty($_POST) && isset($_POST["nom"]) && $_POST["nom"] != "") {
            $result = rechercheTab($listeEx1, $_POST["nom"]);
            echo $result;
        }
    ?>

    <h1> Exercice 2 </h1>
    <!-- Debut du formulaire -->
    <form enctype="multipart/form-data" action="./TP2.php" method="post">
        <fieldset>
            <p>
                <label>testez le code : </label>
                <input type="submit" name="test" value="Test" />
            </p>
        </fieldset>
    </form>
    <!-- Fin du formulaire -->
    <?php
        $circularArray = ["", "", "", "", ""];
        $tailleMax = 5;
        $indexCircularArray = 0;
        
        function addElement($sentence) {
            // VOTRE CODE ICI
        }
        
        /*
            Cette fonction efface le dernier élément enregistré dans le tableau.
        */
        function removeLastElement() {
            // VOTRE CODE ICI
        }
        
        function printArray() {
            // VOTRE CODE ICI
        }

        function tests() {
            printArray(); // output : [,,,,]
            echo "<br />";
            addElement("salut !");
            // indexCircularArray == 1
            addElement("bonjour !");
            // indexCircularArray == 2
            printArray(); // output : ["salut !", "bonjour !",,,]
            echo "<br />";
            addElement("re-salut !");
            // indexCircularArray == 3
            addElement("re-bonjour !");
            // indexCircularArray == 4
            addElement("Je code !");
            // indexCircularArray == 0
            addElement("Je remplace 'salut !' par cette phrase !");
            // indexCircularArray == 1
            printArray(); // output : ["Je remplace 'salut !' par cette phrase !", "bonjour !", "re-salut !", "re-bonjour !", "Je code !"]
            echo "<br />";
            removeLastElement();
            // indexCircularArray == 0
            printArray(); // output : [, "bonjour !", "re-salut !", "re-bonjour !", "Je code !"]
            echo "<br />";
        }

        if(!empty($_POST) && isset($_POST["test"]) && $_POST["test"] != "") {
            tests();
        }
    ?>

    <h1> Exercice 3 </h1>
    <!-- Debut du formulaire -->
    <form enctype="multipart/form-data" action="./TP2.php" method="post">
        <fieldset>
            <legend>La suite de Collatz</legend>
                <p>
                    <label>Entrez un nombre : </label>
                    <input type="input" name="collatz" />
                    <input type="submit" name="submit" value="test" />
                </p>
        </fieldset>
    </form>
    <!-- Fin du formulaire -->
    <?php
    function collatz($myNumber) {
        $res = "";
        // VOTRE CODE ICI

        echo $res;
    }

    if(!empty($_POST) && isset($_POST["collatz"]) && $_POST["collatz"] != "") {
        $intCollatz = strval($_POST["collatz"]);
        collatz($intCollatz);
    }
    ?>
    
    <h1> Exercice 4 </h1>
    <!-- Debut du formulaire -->
    <form enctype="multipart/form-data" action="./TP2.php" method="post">
        <fieldset>
            <legend>Touché - Coulé</legend>
                <p>
                    <label>Entrez des coordonnées : </label>
                    <input type="input" name="coords" placeholder="X Y" />
                    <input type="submit" name="submit" value="tir" />
                </p>
                <p>
                    <label>Afficher le board : </label>
                    <input type="submit" name="printboard" value="print" />
                </p>
        </fieldset>
    </form>
    <!-- Fin du formulaire -->
    <?php
    $myArray = [
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [0, 0, 1, 0, 1, 1, 1, 0, 0, 1],
        [0, 0, 1, 0, 0, 0, 0, 0, 0, 1],
        [0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    ];

    // coordonnées pour le bonus
    $arrayCoords = [
        [[0,0]],
        [[0,9], [1,9], [2,9], [3,9]],
        [[2,2], [3,2],[4,2], [5,2]],
        [[6,6], [7,6]],
        [[2,4], [2,5], [2,6]],
        [[9,7], [9,8], [9,9]]
    ];

    function generateBoard($size, $arrayCrds) {
        // QUESTION BONUS
    }

    function printBoard($twoDimTab) {
        // votre code ici
    }

    function tir($arr, $coordX, $coordY) {
        // votre code ici
    }

    if(!empty($_POST) && isset($_POST["coords"]) && $_POST["coords"] != "") {
        $expl = explode(" ", $_POST["coords"]);
        if(sizeof($expl) > 1) {
            $intCoordX = intval($expl[0], 10);
            $intCoordY = intval($expl[1], 10);
            tir($myArray, $intCoordX, $intCoordY);
        } else {
            echo "il faut 2 coordonnées";
        }
    }
    if(!empty($_POST) && isset($_POST["printboard"]) && $_POST["printboard"] != "") {
        printBoard($myArray);
    }
    ?>
</body>
</html>