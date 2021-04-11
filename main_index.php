<!DOCTYPE html>
<htlm>
    <?php include("head.php") ?>
    <header>
        <?php include('menuHomepage.php') ?>
    </header>

    <body>
        <div class="container-fluid">
            <div id="imgAvec">
                <h1>-AVEC-</h1>
                <P>Lorem ipsum dolor sit amet consectetur,
                    adipisicing elit. Distinctio, velit.</P>
            </div>
            <!-- Currently 'month' -->
            <div>
                <h4 class="text-center annee">Niveau Annenuel</h4>
                <div class="labele0">
                    <small class="text-muted"><?php echo 'Nous sommes au mois de ' . date('m') . ' sur 12'; ?></small>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;background-color: green">33.3%</div>
                    </div>
                </div>
            </div>
            <div class="row date2">
                <div class="col-6 col-md-3 col-lg-3 text-center">
                    <p class="begyear">1996</p>
                    <label>Année de création</label>
                </div>

                <div class="col-6 col-md-3 col-lg-3 text-center">
                    <p class="pbegyear"><?php echo "" . date('d'); ?></p>
                    <label>Aujourd'hui</label>
                </div>

                <div class="col-6 col-md-3 col-lg-3 text-center">

                    <p class="begyear"><?php echo "" . date('m'); ?></p>
                    <label>Actuel mois</label>
                </div>

                <div class="col-6 col-md-3 col-lg-3 text-center">
                    <p class="begyear"><?php echo "" . date('y'); ?></p>
                    <label>Actuelle Année</label>
                </div>

            </div>
            <div class=" mainApropos shadow p-1 mb-0 rounded">
                <div class="row">
                    <!-- About AVEC -->


                    <div class="col-12 col-md-6 text-center">
                        <h5 class="text-center h1 p-1">Un mot sur nous</h5>
                        <hr class="ligne">
                    <p style="padding:10px">AVEC est une association qui nous permet de gèrer nos argants d'une façon harmonieuse
                                                .cette association mette les avantages à tout ses membres équitablement et sans discrimination.
                                                Nous facilitons l'epargne à tous peu ton temps d'adesion.celle ci 
                                                ne vise pas le rang social,plutot c'est à l'interet de tous.
                                Nous veillons et nous nous inquiètons de nos membres dans les beaux et mauvais jours.</p>
                        <a href="apropos.php"><span class="font-weight-bold text-center infoplus">+ d'infos</span></a>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="css/2a.jpg" class="photoAp" alt="">
                    </div>
                </div>
            </div>
            <div id="actualite" class="text-center col">
                <h1>Actualite</h1>
                <hr class="ligne">
                <p>Ne manquez aucune actualité à propos de la société AVEC en aimant notre page Facebook!</p>
                <a href="versement.php" class="text-white"><i class="fab fa-facebook fa-5x bgcolorfb"></i></a>
            </div>
            <div>
                <h1 class="text-center titremembre">Membres </h1>
                <hr class="ligne">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/mam.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Aimerance AIMERANCE</h5>
                                        <p class="card-text">Secrétaire Général <br> et charger de suivie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/edison.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Enock MITAHI</h5>
                                        <p class="card-text">Directeur Général et charger de suivie </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/taty.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="text-decoration">Tatiana TASI</h5>
                                        <p class="card-text">Charger de resource humaine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="ligne1">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/edison.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Yannick NINGA</h5>
                                        <p class="card-text">Tresorier</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/maman.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Rossette SHABANI</h5>
                                        <p class="card-text">Charger de comminication</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img class="photo" src="images/mam.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                    <h5 class="card-title">Sakina TASI</h5>
                                        <p class="card-text">Charger de comminication</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center"><a href="versement.php"><i class="fas fa-angle-down fa-5x p-3 bgcolor shadow-lg mb-5"></i></a></p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div id="carouselExampleCaptions" class="carousel slide imgcarousel maincarousel" data-ride="carousel">
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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card mb-3 shadow p-0 carte ">
                        <div class="card-header header-card text-center">Guide</div>
                        <div class="card-body body-card text-center">
                            <h6 class="card-title "> Pour plus d'orientation consulter ces titres</h6>
                            <div class="card-text text-lowercase sousTitre">
                                <i class="fas fa-angle-right" style="color: #ff922b;"></i>
                                <h8>S'inscrire</h8><br>
                                <i class="fas fa-angle-right" style="color: #ff922b;"></i>
                                <h8>Notre Addresse</h8><br>
                                <i class="fas fa-angle-right" style="color: #ff922b;"></i>
                                <h8>perspective d'avenir</h8><br>
                                <i class="fas fa-angle-right" style="color: #ff922b;"></i>
                                <h8>Offres d'emploies disponibles</h8>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" text-center front_footer">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <p class="texte"><strong>AVEC</strong> est à votre niveau <br>
                            Faites vos epargnes tout les jours<br>à chaque heure vous gagnerai plus </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 pbouton margi">
                        <a class="btn btn-warnings bouton" style="margin-top:3px" href="apropos.php"> En savoir</a>
                    </div>
                </div>
            </div>

            <?php include('footer.php')?>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</htlm>