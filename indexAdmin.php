<!DOCTYPE html>
<htlm>
<?php include("head.php")?>
  <body>
       <header> 
        <?php include('menuAdmin.php')?>

        </header><!--menu close -->
        
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
                  <!-- debut tableau    dette  -->

                   <div class="container-fluid gestion">
      <h1 class="text-center" style="background-color: rgb(13, 4, 37);color: #fd7e14;border-radius: 0 20px 0 20px;font-size:20px">Etat actuel </h1>
      <p class="text-center gestionP">Information sur chaque membre de l'association</p>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">Cas sociaux visités</th>
            <th scope="col"> Sortie USD</th>           
            <th scope="col"></th>
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

       <table class="table">
        <thead>
          <tr>
            <th scope="col">Cas sociaux visités</th>
            <th scope="col"> Sortie USD</th>           
            <th scope="col"></th>
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

<h6 style="color:blue" >Tresor disponible</h6>
     <table class="table">
        <thead>
          <tr>
            <th scope="col">montat USD</th>
            <th scope="col">  Montat FC</th>           
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          <tr class="colone">
            <th scope="row">6000</th>
            <td>500.000</td>           
            <td><span class="btn buttonbg">Voir plus</span></td>
          </tr>

        </tbody>
      </table>

    </div>
    </div>
<div class="text-center" style="height:40px;background:rgb(13, 4, 37); "> <a href="#toMenu">Aller vers l'ancre</a></div>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </body>
        </htlm>