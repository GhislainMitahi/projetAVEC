

       
<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
          <body>
                <header>
                <?php include("menuAdmin.php")?>
                </header>
                <div class="login">
                <h4 class="titleinscrir">ENTER DANS CE FORMULAIRE LES IDENTITES CORRECTES</h4>
                <div class="container">
                <form>
                  
                  <div class="form-group row">
                    <label for="inputpostnom" class="col-sm-2 col-form-label">Nom <span class="start">*</span> </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputdate" class="col-sm-2 col-form-label">Date de naissance<span class="start">*</span></label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email ou Téléphone<span class="start">*</span></label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3">
                    </div>
                  </div> 
                  <div class="p-5 logbtn">
                      <button type="submit" class="btn btn-couleur text-center bgcolor">Enregistrer</button>
                    
                     </div>
               </form>
              </div>
              </div>
                <div class="container-fluid" style="background-color:rgb(13, 4, 37);height: 156px;"></div>
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
   </body>
</html>
