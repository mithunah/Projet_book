<h1 class="my-4 text-center" style="font-style: italic;">Créer Vos Propres Bibliotheque Virtuelles Sur Ce Site</h1>

<h3  style="margin: 90px 10px 10px 60px;text-decoration: underline;">Sorties récentes</h3>
<?php
  foreach($book as list($id, $auteur, $titre, $resume, $datePub)){ ?>
    <div class="card" style="margin: 10px 90px;">
      <div class="row g-0">
        <div class="col-md-4">
          <a href="index.php?route=livre&action=<?php echo $id; ?>">
            <img src="image/Livre_<?php echo $id;?>.jpg" style="width:100%; height:auto;" alt="couverture de <?php echo $titre;?> ">
          </a>
          </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $titre;?></h5>
            <p class="card-text" ><?php echo $resume;?></p>
            <p class="card-text"><small class="text-muted"><?php echo $auteur;?></small></p>
          </div>
        </div>
      </div>
    </div>
<?php } ?>
         