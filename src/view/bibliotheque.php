<h1 class="ms-3" style="font-style: italic;">Notre Bibliothèque</h1>

<div class="row row-cols-1 row-cols-md-3 g-4 m-3">
<?php foreach($book as list($id, $auteur, $titre, $resume, $datePub, $genre)){ ?>
    <div class="col">
        <div class="card" style="border: white;">
            <div class="card-body">
                <a href="index.php?route=livre&action=<?php echo $id; ?>">
                    <img src="image/Livre_<?php echo $id;?>.jpg" class="rounded mx-auto d-block" style="width:100%; height:auto;" alt="couverture de <?php echo $titre;?> ">
                </a>
            </div>
            <div class="card-footer">
                <?php echo $genre; ?>
            </div>
        </div>
    </div>
<?php } ?>
</div>