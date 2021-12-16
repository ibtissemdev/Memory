<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="./memory.css" rel="stylesheet">
    <link rel="icon" type="images/png" href="images-memory\black.png">

    <title>Memory</title>
</head>


<body>
    <!-- Les marges -->
    <div class="container">
        <div class="row">
            <div class="col-13">
                <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a>

            </div>
        </div>



        <div class="row">
            <div class="col-12">

            <button><a href="deconnexion.php">Deconnexion</a></button> 
                <?php

                // Afficher la fiche contact

                try {

                    require 'initialisation.php';
                    if (empty($_SESSION['result'])) {
                        header("location: authentification.php");
                        // echo "Identifiant ou mot de passe incorrect";
                    }

                    $tri = "SELECT * From Contact where Id= " . $_GET['id'];
                    $sth = $conn->prepare($tri);
                    $sth->execute();
                    $result = $sth->fetch();

                    echo ' <div class="row">
                            <div class="col-6">';
                    echo '<a href="./supprimer.php?id=' . $result['Id'] . '"><img class="suppimg" src="images-memory\corbeille.png" alt="supprimer contact"></a></div>';
                    echo '
    <div class="col-6"><a href="./modifiercontact.php?id=' . $result['Id'] . '"><img class="mod" src="images-memory\modifier.png"alt="modifier contact"></a></div></div>';


                    $sexe = $result['Sexe'];

                    if ($sexe == 'femme') {
                        echo '<img class= src="images-memory\avatarfemme.png" alt="Logo memory">' . '<br>';
                    } elseif ($sexe == 'homme') {
                        echo '<img src="images-memory\avatarhomme.png" alt="Logo memory">' . '<br>';
                    }


                    if (isset($result)) {
                        echo "Prénom : " .  $result['Prenom'] . '<br>';
                        echo "Nom : " . $result['Nom'] . '<br>';
                        echo "Teléphone portable : " . $result['Telportable'] . '<br>';
                        echo "E-mail : " . $result['Mail'] . '<br>';
                    }
                } catch (PDOException $e) {
                    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
                }


                ?>

            </div>
        </div>
    </div>
</body>