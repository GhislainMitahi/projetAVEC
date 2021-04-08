<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
  <body>
        <header>
        <?php include('menuHomepage.php')?>
        </header><!--menu close -->
        <div class="container-fluid">
          <section>
            <div id="imgAvec">
              <h1>-AVEC-</h1>
              <P>Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Distinctio, velit.</P>
            </div>
            <!-- open labels pour l'evolution de l'annee  -->
            <h4 class="text-center annee">Niveau Annenuel</h4>
            <div class="labele0">
           <small class="text-muted"><?php echo'Nous sommes au mois de '.date('m').' sur 12';?></small>
              <div class="progress"> 
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;background-color: orange">33.3%</div>
              </div>
            </div>
            <div class="abele1">
            <small class="text-muted">12 sur 12</small>
                <div class="progress ">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;background-color: rgb(5, 206, 92)">100%</div>
                </div>
            </div>
            <!-- close labels -->
            <nav class="presentation">
               <h4 class="titrepresentation">Nos leaders</h4>
               <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100 bg-colorpresentation">
                    <img src="images/image1.jpg" class="rounded-circle sizimage center-block" alt="...">
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
                   <p class="center-block"> <img src="images/image1.jpg" class="rounded-circle  sizimage center-block" alt="..."></p>
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
                    <small class="text-white">Last updated 3 mins ago</small>
                    </div>
                  </div>
                </div>
              </div>
            </nav> <!-- close nos leaders-->
            </div>
            <!-- Apropos de l'entreprises  -->

            <div class="row date2">
                    <div class="col-6 col-md-3 col-lg-3 text-center">
                          <p class="begyear">1996</p>
                          <label>Année de création</label>
                      </div>

                      <div class="col-6 col-md-3 col-lg-3 text-center"> 
                        <p class="pbegyear"><?php echo "" .date('d');?></p>
                        <label>Aujourd'hui</label>
                      </div>

                      <div class="col-6 col-md-3 col-lg-3 text-center">

                        <p class="begyear"><?php echo "" .date('m');?></p>
                        <label>Actuel mois</label>
                      </div>

                      <div class="col-6 col-md-3 col-lg-3 text-center">
                        <p class="begyear"><?php echo "" .date('y');?></p>
                        <label>Actuelle Année</label>
                      </div>
                  </div>
                
          
            <div class=" mainApropos shadow p-1 mb-0 rounded">
              <div class="row">
              <div class="col-12 col-md-6 text-center">
                <h5 class="text-center h1 p-1">Un mot sur nous</h5>
                <hr class="ligne">
                <p style="padding:10px" >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, temporibus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam, itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet pariatur aut corporis autem! Fugit nihil, laboriosam nisi nesciunt culpa aspernatur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum,
                </p>
                <a href="apropos.php" ><span class="font-weight-bold text-center infoplus">+ d'infos</span></a>
              </div>
              <div class="col-12 col-md-6" >
                     <img src="images/bb11.jpeg" class="photoAp" alt="">
            </div>
          </div>
      
        <div id="actualite" class="text-center col">
          <h1>Actualite</h1>
          <hr class="ligne">
          <p>Ne manquez aucune actualité à propos de la société AVEC en aimant notre page Facebook!</p>
          <i class="fab fa-facebook fa-5x bgcolorfb"> <a href="gestion.php"></a></i>
      </div>
          <h1 class="text-center titremembre">Membres </h1>
          <hr class="ligne">
          <div class="">
            <div class="row">
              <div class="col-md-4">
               <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
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
              <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
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
                  <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
                     <div class="row no-gutters">
                        <div class="col-md-4">
                          <img class="photo"src="images/coolman.jpg" alt="...">
                         </div>
                        <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="text-decoration">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <hr class="ligne1">
              <!-- close premiere colonne membre-->
                <div class="">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
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
            <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
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
               <div class="card mb-3 shadow-sm p-0 mb-5 bg-white rounded">
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
              </div>
            <p class="text-center"><a href="membres.php"><i class="fas fa-angle-down fa-5x p-3 bgcolor shadow-lg mb-5"></i></a></p>
              <div class="px-lg-5 shadow mb-0 bg-white rounded">
                  <div class="row mx-lg-n5">
                    <div class="col-12 col-md-6 col-lg-6 py-3 px-lg-5  ">
                        <div id="carouselExampleCaptions" class="carousel slide imgcarousel maincarousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/bb11.jpeg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img src="images/pc.jpg" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
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
                                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8>S'inscrire</h8><br>
                                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8>Notre Addresse</h8><br>
                                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8 >perspective d'avenir</h8><br>
                                    <i class="fas fa-angle-right" style="color: #ff922b;"></i> <h8 >Offres d'emploies disponibles</h8>
                                  </div>
                                </div>
                              </div>
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
                    <div class="col-12 col-md-6 col-lg-6 pbouton">
                      <button type="button" class="btn btn-warnings bouton"> En savoir</button>
                    </div>
                  </div>
                </div>
                </div>

                <?php include('footer.php')?>
                  </section>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                
            </body>
        </htlm>