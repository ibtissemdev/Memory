<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="./memory.css" rel="stylesheet">

    <title>Ajout contact</title>
</head>

<body>
    
    <div class="container">


        <form action="table.php" method="post" class=" vertical-alignment">
            <div class="col-md-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" name="nom" id="nom">
            </div>
          
            <div class="col-12">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom">
            </div>
            <div class="col-12">
              <label for="mail" class="form-label">Mail</label>
              <input type="email" class="form-control" name="mail" id="mail" placeholder="mail">
            </div>
            <div class="col-md-12">
              <label for="telportable" class="form-label">Numéro de portable</label>
              <input type="tel" class="form-control" name="telportable" id="telportable" placeholder="01 23 45 67 89">
            </div>
          
            <div class="col-md-3">
              <label for="inputState" class="form-label">Sexe</label>
              <select id="inputState" name="sexe" class="form-select">
                <option value="homme" selected>Homme</option>
                <option value="femme">Femme</option>
              </select>
            </div>
          
            <div class="col-12">
              <button type="envoyer" class="btn btn-primary">Ajouter</button>
            </div>
          </form>











</div>













</body>
</html>