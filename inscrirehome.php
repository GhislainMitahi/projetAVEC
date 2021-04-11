

       
<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
          <body>
                <header>
                <?php include("menuHomePage.php")?>
                </header>
                <div class="login">
                <h4 class="titleinscrir">ENTER DANS CE FORMULAIRE LES IDENTITES CORRECTES</h4>
                <div class="container">
                <p class="text-center centre">Vous allez recevoir un message de confirmation pour l'inscription dans votre<strong> mail </strong> <br> ou sur votre <strong> numero de telephone </strong>mensionne dans ce formulaire</p>
                <form>
                  
                  <div class="form-group row">
                    <label for="inputpostnom" class="col-sm-2 col-form-label">Nom <span class="start">*</span> </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputdate" class="col-sm-2 col-form-label">Date d'enregistrement<span class="start">*</span></label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email<span class="start">*</span></label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>

                  <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Téléphone<span class="start">*</span></label>
                                
                                
                                
                               
                                <div class="form-group col-md-4">
                                <input type="number" class="form-control" >
                            </div>
                        </div>
                  <div class="p-5 logbtn">
                      <button type="submit" class="btn btn-couleur text-center bgcolor">Enregistrer</button>
                    
                     </div>
               </form>
              </div>
              </div>
              <?php include('footer.php')?>
                <!-- <div class="container-fluid" style="background-color:rgb(13, 4, 37);height: 129px;"></div> -->
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
   </body>
</html>
