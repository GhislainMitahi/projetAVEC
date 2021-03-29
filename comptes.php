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
                </header>
                   <div class="container">
                     <form style="padding-top:100px">
                            <h4 style="text-align:center;margin-bottom:30px"> VERSEMENT</h4>
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
                    <div class="col-md-6"> 
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
       
        <?php include("footer.php")?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>