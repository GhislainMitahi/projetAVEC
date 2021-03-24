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
        <?php include('menu.php')?>
        </header><!--menu close -->
          <section>
            <div id="imgAvec">
              <h1>-AVEC-</h1>
              <P>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Distinctio, velit.</P>
            </div>
            <!-- open labels pour l'evolution de l'annee  -->
            <h4 class="text-center annee">Niveau Annenuel</h4>
            <div class="container labele0">
            <small class="text-muted"><?php echo'Nous sommes au mois de '.date('m').' sur 12';?></small>
              <div class="progress"> 
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;background-color: orange">33.3%</div>
              </div>
            </div>
            <div class="container labele1">
            <small class="text-muted">12 sur 12</small>
                <div class="progress ">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;background-color: red">100%</div>
                </div>
            </div>
            <!-- close labels -->
            <nav class="presentation container">
               <h4 class="titrepresentation">Nos leaders</h4>
               <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 bg-colorpresentation">
                    <img src="images/image1.jpg" class="rounded-circle sizimage" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer footercard">
                      <small class="text-white">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-colorpresentation">
                    <img src="images/image1.jpg" class="rounded-circle  sizimage" alt="...">
                    <div class="card-body">
                      <h5 class="card-title titrecard2">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer footercard">
                      <small class="text-white">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100 bg-colorpresentation">
                    <img src="images/image1.jpg" class="rounded-circle  sizimage" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to </p>
                    </div>
                    <div class="card-footer footercard">
                      
                    </div>
                  </div>
                </div>
              </div>
            </nav> <!-- close nos leaders-->
            <h1 class="text-center">Membres </h1>
            <div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      
    <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="photo"src="images/coolman.jpg" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- close premiere colonne membre-->
  
        <div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      
    <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="photo"src="images/coolman.jpg" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
        
        </div> <!-- close deuxieme colonne -->
        <div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      
    <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img class="photo"src="images/coolman.jpg" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-4">
      
    <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="photo"src="images/coolman.jpg" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div> <!-- close troisieme colonne -->
        
          <!-- commentaire et guide-->
          <div class="container commentaireguid">
            <div class="row">
            <div class="col-sx-6 col-sm-6 col-md-6 col-lg-6 shadow p-3 mb-5 bg-body rounded comentaire">
            <h4 class="text-center">COMMENTAIRE</h4>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Mettez votre commentaire ici" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Commentaire</label>
            </div>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Addresse Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">regarde moi</label>
              </div>
              <button type="submit" class="btn btn-warnings bg-body rounded">Envoyer</button>
            </form>
            </div>
            <div class="col-sx-6 col-sm-6 col-md-6 col-lg-6">
              <div class="card carte containere-fluid mb-3 shadow p-3 mb-5 ">
                <div class="card-header header-card text-center">Guide</div>
                 <div class="card-body body-card ">
                  <h6 class="card-title "> Pour plus d'orientation consulter ces titres</h6>
                   <div class="card-text text-lowercase sousTitre">
                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8>S'inscrire</h8><br>
                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8>Notre Addresse</h8><br>
                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8 >perspective d'avenir</h8><br>
                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8 >Offres d'emploies disponibles</h8>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </div> <!--close commentaire et guide --> 
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
                <h5> Nos Adresses</h5>
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
          </section>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</htlm>