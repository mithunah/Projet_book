<?php if (isset($alertExistence)){?>
    <div class="alert alert-warning m-5" role="alert">
        <h5 class="mb-0">Désolé. Aucun livre de ce nom dans notre bibliothèque.</h5>
        </div>
<?php }
else{
  foreach($book as list($id, $auteur, $titre, $resume, $datePub)){ ?>
    <div class="card" style="margin: 120px;">
      <div class="row g-0">
        <div class="col-md-4">
          <a href="index.php?route=livre&action=<?php echo $id; ?>">
            <img src="image/Livre_<?php echo $id;?>.jpg" style="height:540px;" alt="couverture de <?php echo $titre;?> ">
          </a>
          </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $titre;?></h5>
            <p class="card-text"><?php echo $resume;?></p>
            <p class="card-text"><small class="text-muted"><?php echo $auteur;?></small></p>
          </div>
        </div>
      </div>
    </div>
<?php } }?>