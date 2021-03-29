<!DOCTYPE html>
<htlm>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/avecstyle.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
            <body>
            <header>
              <?php include("menu.php")?>
            </header><!--menu close -->
        <section class="maindver">
             <div class=" div1">
               <h4 class="p-2 titreS">QUEL VERSEMENT VOULEZ-VOUS FAIRE ?</h4>
               <hr class="line">
                <ul class= " versmenu">
                  <a href="contributionmensuelle.php"><li class="p-2 inmen">Contribution Mensuelle</li></a>
                  <a href="cassocial.php"><li class="p-2 inmen">Cas Social</li></a>
                  <a href="fonctionnement.php"><li class="p-2 inmen">Fonctionnement</li></a>
                </ul>
             </div>
        </section>
      
       <?php include("footer.php") ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>