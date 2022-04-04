function creationPanier(){
    if (!isset($_SESSION['panier'])){
        $_SESSION['panier']=array();
        $_SESSION['panier']['libelleProduit'] = array();
        $_SESSION['panier']['qteProduit'] =array();
        $_SESSION['panier']['prixProduit'] = array();
        $_SESSION['panier']['verrou'] = false;
        }
        return true 
    }


function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){ //Si le panier existe
    if (creationPanier() && !isVerrouille())
{               //Si le produit existe déjà on ajoute seulement la quantité
    $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']); if ($positionProduit !== false)
    { $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
}   else
      {  //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
   }  }  array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
else
}  echo "Un problème est survenu veuillez contacter l'administrateur du site.";