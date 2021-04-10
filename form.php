<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
            <body>
            <header>
            <?php include("menuHomePage.php")?>  
            </header><!--menu close -->
        <section class="maindver">
             <div class=" div1">
               <h4 class="p-2 titreS font-italic">Seul l'administrateur doit se connecter ici</h4>
               <hr class="line">
            <div id="formulaire">
               <form action="indexAdmin.php" method="post">
                  <p>
                  <input type="text" name="nom" placeholder="Pseudo"/>
               </form>
               <form action="indexAdmin.php" method="post">
                  <p id="formulaire">
                  <input type="password" name="mot_de_passe" placeholder="PassWord" />
                  <input type="submit" value="Valider" class="valide" />
                  </p>
               </form>
            </div>
             </div>
        </section>
      
        <div class="container-fluid" style="background-color:rgb(13, 4, 37);height: 68px;"></div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>