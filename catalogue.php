<?php
require("config/panier.class.php");
  $Panier = new panier;

require("config/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="a voir en groupe ">
  <meta name="generator" content="antoine">
  <title>la piscine</title>
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
  <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
</head>
<?php include 'inclure/head.php' ?>
<?php include 'inclure/menu.php' ?>

<body>

 <!-- <header>
    
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Sign in</h4>
            <ul class="list-unstyled">
              <li><a href="admin/index.php" class="text-white">Connexion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>MonoShop</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
 
  

  </header>  -->
  <section>
      <div class="wrapper">
              <h1>acheter votre titre</h1>
      </div>

    
    </section>
  
    <section>
      <div class="wrapper">
        <div class="container">
          <div class="">
            <!-- sert a afficher les produits -->
            <?php foreach($Produits as $produit): ?>
            <div class="produit_conteneur">
              <div class="produit_image_texte">
                <title><?= $produit->nom ?></title>
                <img src="<?= $produit->image ?>">
                <p class=""><?= substr($produit->descriptions, 0, 200); ?></p>
                <div class="bouton_produit">
                  <div class="boutons">
                  <small class="text-muted"><?= $produit->prix ?> €</small>
                    <a href="addpanier.php?id=<?= $produit()->id; ?>" class="add">Ajouter au panier</a>
                  </div>
                
                </div>
                
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    
    <section>
      <div class="wrapper">
              <h1>teste</h1>
      </div>

    
    </section>

</body>

</html>
