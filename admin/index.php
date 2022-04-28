<?php

require("../config/commandes.php");
require("../config/connexion.php");

$Produits=afficher();
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
        <link rel="icon" href="icon.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300&display=swap" rel="stylesheet">
        <title>Piscine Rennes</title>
        <!-- les polices -->
        <style>@import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');</style>
        <link rel="stylesheet/less" type="text/css" href="../styles.less" />
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <!-- utiliser less sans utiliser internet -->

    </head>
    <body>
    <header>
        <a href="index.php">
            <div class="logo"> </div>
        </a>
        <nav class="fill">
            <ul>
                <li><a href="../index.php">se déconnecter </a></li>
            </ul>
        </nav>
    </header>

        <section>
            <div class="wrapper">
                <h1>ajouter un produit !</h1>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
                        <input type="name" class="form-control" name="image" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">age</label>
                        <textarea class="form-control" name="age" required></textarea>
                    </div>

                    <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
                </form>
            </div>
        </section>


        <section>
            <div class="wrapper">
                <h1>Supprimer un produit</h1>
                <div class="">

                    <form method="post">
                        <div class="mb-3">

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>

                                <input type="number" class="form-control" name="idproduit" required>
                            </div>

                            <button type="submit" name="Supprimer" class="btn btn-primary">Supprimer le produit</button>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="container">
                    <?php foreach($Produits as $produit): ?>
                        <div class="produit_conteneur">
                            <div class="produit_image_texte">
                                <h2>ID<?= $produit->id ?></h2>
                                <h4>age<?= $produit->age ?></h4>

                                <title><?= $produit->nom ?></title>
                                <img src="<?= $produit->image ?>">
                                <p class=""><?= substr($produit->description, 0, 200); ?></p>

                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                </div>
            </div>
        </section>


        </body>
</html>

<?php

if(isset($_POST['Supprimer']))
{
    if(isset($_POST['idproduit']))
    {
        if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']))
        {
            $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

            try
            {
                supprimer($idproduit);
            }
            catch (Exception $e)
            {
                $e->getMessage();
            }



        }
    }
}

?>


    </body>
    </html>

<?php

if (isset($_POST['valider'])) {
    if (isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['desc']) and isset($_POST['age'])) {
        if (!empty($_POST['image']) and !empty($_POST['nom']) and !empty($_POST['prix']) and !empty($_POST['desc']) and !empty($_POST['age'])) {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom   = htmlspecialchars(strip_tags($_POST['nom']));
            $prix  = htmlspecialchars(strip_tags($_POST['prix']));
            $desc  = htmlspecialchars(strip_tags($_POST['desc']));
            $age   = htmlspecialchars(strip_tags($_POST['age']));

            try {
                $access = new pdo("mysql:host=localhost;dbname=monoshop;charset=utf8", "root", "");
                $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                var_dump($_POST['image']);
                $sql = "INSERT INTO produits (image, nom, prix, description, age) VALUES (:image, :nom, :prix, :desc, :age)";

                $query = $access->prepare($sql);
                //ensuite on injecte les valeurs
                $query->bindValue(":image", $image, PDO::PARAM_STR);
                $query->bindValue(":nom", $nom, PDO::PARAM_STR);
                $query->bindValue(":prix", $prix, PDO::PARAM_STR);
                $query->bindValue(":desc", $desc, PDO::PARAM_STR);
                $query->bindValue(":age", $age, PDO::PARAM_STR);
                // $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES ('$image', '$nom', $prix, '$desc')");
                if (!$query->execute()) {
                    die("une erreur est survenue");

                }


                //on récupere le dernier id qu'on as mis dans la base de donnée
                $id = $access->lastInsertId();
                die("article ajouté sous l'id numéros $id");
            } catch (Exception $e) {
                $e->getMessage();
                var_dump($nom);
            }

        }
    }
}

//supprimer un produit

?>