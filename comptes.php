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
                            <h5 class="text-warning h6"><a href="inscrire.php">S'inscrir</a></h5>x
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-warning">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                    </div>
                </header><!--menu close -->
                   <div class="container">
                     <form style="padding-top:100px">
                            <h4 style="text-align:center;margin-bottom:30px"> LISTE DES MENBRES</h4>
                        <div class="form-group row">
                            <label for="inputnom" class="col-sm-2 col-form-label">RECHERCHE*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" value="trouvez le menbre ici">
                        </div>
                      </div>
                    </div>
                    <div>
                        <h7 style="margin-left:20px" class="text-muted">Completer la contribution pour ce menbre</h7>
                    </div>
                <div class="contenair shadow p-3 mb-5 bg-white rounded " style="margin: 20px 20px 20px 20px">
                    <div class="row">
                        <div class="col-md-4">
                        <small class="text-muted" style="text-align:center;margin-left:50px">Profil du menbre</small>
                            <div class="row"> 
                            <div class="col-md-2 ">
                        <a href="comptes.php"><img src="images/coolman.jpg" class="imgmenbres " style="width: 100px;
                        height: 160px;"alt=""></a>
                    </div>
                    </div>
                    <div class="col-md-2 shadow-sm p-3 mb-5 bg-white rounded" style="text-align:center;margin-left:40px;margin-top:30px;margin-bottom:30px;">
                       <p>Ghislain Mitahi</p>
                    </div>
                        </di>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="text" class="form-control" id="inputPassword4">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
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