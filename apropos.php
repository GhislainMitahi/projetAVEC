<!DOCTYPE html>
<htlm>
 <?php include("head.php")?>
            <body>
                <header>
                        <?php include("menuHomePage.php")?>
                </header><!--menu close -->
                <div class="container-fluid">
            <div id="imgAvec">
                <h1>-AVEC-</h1>
                <P>Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Distinctio, velit.</P>
            </div>
                    
                   
                     <h2 class="text-center p-4">L'assocition AVEC</h2>

                    <p class="text-center p-4 shadow-sm">Association AVEC Actions pour Vaincre l'Exclusion des Citoyens. Des projets alliant culture et social</p>
                     <p class=" text-justify bg-light rounded p-3" style="box-shadow: 2px 2px 3px rgb(13, 4, 37);">
                     L’association développe deux volets : <br>

- un volet culturel qui consiste à la mise en place des différentes actions culturelles qui favorisent le lien social, la citoyenneté, le vivre-ensemble, l’ouverture culturelle. Elle axe ses projets dans la société. Les projets sont par exemple la mise en place des dispositifs de la liberté financière où nos Membtes concernés deviennent etre amesure ou capable de realiser leurs objectifs financièrement. Ils investissent ainsi l'espace public et sont réellement acteurs du projet. C'est intergénérationnel, ouvert à tous et cela créé beaucoup de liens social. <br>

- un volet accompagnement social qui facilite l'asstances social en cas de besoin difficil et facil.
<nav class="nav justify-content-center navbar-dark bg-light p-3">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link p-4 apos" href="versement.php"><strong> A La une</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-4 apos" href="inscrirehome.php"><strong>Adherer</strong></a>
        </li>

        <li class="nav-item">
          <a class="nav-link p-4 apos" href="versement.php"><strong>Faire un don</strong></a>
          </li>
          <li class="nav-item">
          <a class="nav-link p-4 apos" href="#"><strong> où nous trouvez</strong></a>
        </li>
      </ul>
    </nav>
    <h4 class="text-center p-5">Nos Images</h4>

    <div class=" margi">
    <div id="carouselExampleCaptions" class="carousel slide imgcarousel1 maincarousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/2a.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="couleurr">First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/note.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 >Tu as ton tour</h5>
                                    <p>Rien que des surprise chez nous,il ya aussi ta place.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/office.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="contenaire-fluid text-center front_footer">
                  <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                      <p class="texte"><strong>AVEC</strong> est à votre niveau <br> 
                      Faites vos epargnes tout les jours<br>à chaque heure vous gagnerai plus </p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 margin">
                    <a class="btn btn-warnings bouton" style="margin-top:20px" href="apropos.php"> En savoir</a>
                    </div>
                  </div>
                 </div>
                <div>
                <?php include("footer.php")?>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>
</html>