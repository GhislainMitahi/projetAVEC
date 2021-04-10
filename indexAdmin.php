<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
  <body>

  <?php
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==
"ghislain") // Si le mot de passe est bon
{
// On affiche les codes
?>
       <header> 
        <?php include('menuAdmin.php')?>
        </header>
        <div class="container-fluid">
            <!-- open labels pour l'evolution de l'annee  -->
           <div id='toMenu'>
            <h4 class="text-center annee">Niveau Annenuel</h4>
            <div class="labele0 p-2 container-fluid">
            <small class="text-muted"><?php echo'Nous sommes au mois de '.date('m').' sur 12';?></small>
              <div class="progress"> 
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;background-color: green">33.3%</div>
              </div>
            </div> 

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
                 

                   <div class="container-fluid etat">
      <h1 class="text-center" style="background-color: rgb(13, 4, 37);color: #fd7e14;border-radius: 0 20px 0 20px;font-size:20px">Etat actuel </h1>
      <p class="text-center gestionP">Information Globale</p>
      <h6 class="text-center" style="colorrgb(13, 4, 37)" >Cas social</h6>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">Cas sociaux visités</th>
            <th scope="col">Sortie(USD)</th>           
            <th scope="col">Details</th>
            
          </tr>
        </thead>
        <tbody>
          <tr class="colone">
            <th scope="row">10</th>
            <td>110</td>           
            <td><span class="btn buttonbg">Voir plus</span></td>
          </tr>
         
        </tbody>
      </table>
      <!-- Cas Social -->
      <h6 class="text-center" style="color:rgb(13, 4, 37)" >Dettes</h6>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombre de Dettes</th>
            <th scope="col"> Dette(USD)</th>           
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          <tr class="colone">
            <th scope="row">10</th>
            <td>110</td>           
            <td><span class="btn buttonbg">Voir plus</span></td>
          </tr>
         
        </tbody>
      </table>
    
      <h6 class="text-center" style="color: rgb(13, 4, 37)" >La caisse</h6>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">Nbre Contribution</th>
            <th scope="col">Caisse(USD)</th>           
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          <tr class="colone">
            <th scope="row">10</th>
            <td>110</td>           
            <td><span class="btn buttonbg">Voir plus</span></td>
          </tr>
         
        </tbody>
      </table>

    </div>
    </div>
    <p class="text-muted">Les informations dans cette table sont à raport avec ce mois actuel</p>
<div class="text-center" style="height:40px;background:rgb(13, 4, 37); "> <a href="#toMenu">Aller vers l'ancre</a></div>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>

                <?php
}
else // Sinon, on affiche un message d'erreur
{
echo '<div class="erreur"><p class="text-center "> Mot de passe incorrect</p></div>';
}
?>

            </body>
        </htlm>