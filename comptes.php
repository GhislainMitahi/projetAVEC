<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
            <body>
            <header>
                    <?php include("menuAdmin.php")?>
                </header>
                   <div class="container">
                     <form style="padding-top:100px">
                            <h4 style="text-align:center;margin-bottom:30px">Mon Profil</h4>
                        <div class="form-group row">
                            <label for="inputnom" class="col-sm-2 col-form-label">RECHERCHE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="ecrivez le nom que vous souhaitez trouver  ici">
                        </div>
                      </div>
                    </div>
                  <div>
                </div>
                <div class="container-fluid text-center">
                 <span class="text-muted"> Si vous disposez un Vervessement quelconque,ces champs sont bien fonctionnels pour les enregistrer</span>
                 </div>
                <div class="container-fluid p-4 bm-4 px-lg-5">
  <div class="row mx-lg-n4">
    <div class="col py-4 px-lg-5  bg-white">   

    <div class="card mb-4 shadow-sm p-0 mb-0 bg-white rounded" style="max-width: 540px;position:absolute;center:10px;top:60px">
  <div class="row no-gutters">
    <div class="col-md-4 ">
      <img class="photoct" src="images/bro.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Ghislain MITAHI</h5>
        <p class="card-text">IP : 01340N9</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col py-4 px-lg-5 bg-white">
      

    <div class="col-md-12">    
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4"> Tranche</label>
              <input type="number" class="form-control" id="inputEmail4">
          </div>
                <div class="form-group col-md-6">
                <label for="inputAddress">Montant</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="USD ou CDF">
            </div>
        </div>
        <button type="submit" class="btn bgcolor" style="float:right;">Enregistrer</button>
        </div>
  </div>
</div>
</div>
                        
       
<div class="container-fluid" style="background-color:rgb(13, 4, 37);height: 60px;margin-top: 140px;margin-bottom: 0px"></div>    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>