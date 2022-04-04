<?php 
class panier{ 


    public function __construct(){

        //je crée une sessions d'une personne 
        if(!isset($_SESSION));{
            session_start();

        }
        //je crée un panier vide pour toutes personne entrant sur le site
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
    }
}





