<html>
<!DOCTYPE html>
<html lang="fr">
<?php include 'inclure/head.php' ?>


    <body>
         <?php include 'inclure/menu.php' ?>
         <section>
             <div class="wrapper">
                 <h1>Se connecter</h1>
             </div>
        </section>
        <section>
             <div class="wrapper">
                <div id="container">
                    <!-- zone de connexion -->
                    <form action="verification.php" method="POST">
                        
                        <label><b>Nom d'utilisateur</b></label>
                        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                        <label><b>Mot de passe</b></label>
                        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                        <input type="submit" id='submit' value='LOGIN' >
                        <?php
                        if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </section>
       
    </body>
</html>