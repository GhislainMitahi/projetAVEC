<!DOCTYPE html>
<htlm>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/cssStyle.css">
        <link rel="stylesheet" href="css/all.min.css">
     </head>
          <body>
                <header>
                    <div class="fixed-top">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="menu p-4">
                        <h5 class="text-warning h6"><a href="inde.php">Acceuil</a></h5>
                <h5 class="text-warning h6"><a href="versement.php">Versement</a></h5>
                <h5 class="text-warning h6"><a href="menbres.php">Menbres & Cas social</a></h5>
                <h5 class="text-warning h6"><a href="gestion.php">Gestion</a></h5>
                <h5 class="text-warning h6"><a href="apropos.php">Apropos</a></h5>
                <h5 class="text-warning h6"><a href="inscrire.php">S'inscrir</a></h5>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    </div>
                </header><!--menu close -->
                <div class="login">
                <h4 class="titleinscrir">ENTER DANS CE FORMULAIRE LES IDENTITES CORRECTES</h4>
                <div class="container">
                <form>
                  <div class="form-group row">
                    <label for="inputnom" class="col-sm-2 col-form-label">Nom*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputprenom" class="col-sm-2 col-form-label">Postnom*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputpostnom" class="col-sm-2 col-form-label">Prenom*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputdate" class="col-sm-2 col-form-label">Date de naissance*</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email*</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                  <fieldset class="form-group row">
                    <legend class="col-form-label col-sm-2 float-sm-left pt-0">Sexe*</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                        homme
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Femme
                        </label>
                      </div>
                    </div>
                  </fieldset>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-couleur">Enregistrer</button>
                    </div>
                  </div>
               </form>
              </div>
              </div>
              <div class="contenaire-fluid text-center front_footer">
                <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <p class="texte"><strong>AVEC</strong> est à votre niveau <br> 
                    Faites vos epargnes tout les jours<br>à chaque heure vous gagnerai plus </p>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <button type="button" class="btn btn-warnings btn-lg bouton"> En savoir</button>
                  </div>
                </div>
              </div>
              <footer class="row footer "> <!--footer page--> 
                  <nav  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 colonefooter ">
                    <span>
                      <h5> Nos dressesA</h5>
                    </span>
                  </nav>
                  <nav  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 colonefooter ">
                    <span>
                    <h5>Contacts</h5>
                  </span>
                  </nav>
                  <nav  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 colonefooter ">
                    <span>
                    <h5> Partenaires</h5>
                  </span>
                  </nav>
                  <aside class="container-fluid">
                    <hr class="ligne_in_footer">
                    <p class="laster"><a href=""><i class="fas fa-phone-alt"></i>  contact our softward ingenier</a></p>
                  </aside>
                </footer> <!--close footer-->
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
   </body>
</html>