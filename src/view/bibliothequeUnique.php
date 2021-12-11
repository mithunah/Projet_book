<h1 class="ms-3" style="font-style: italic;">Ma Bibliothèque</h1>
<?php if (isset($ajoutBook)){?>
    <div class="alert alert-info m-5" role="alert">
        <p class="mb-0">Ajout de <?php echo $ajoutBook->getTitre(); ?> dans votre bibliothèque.</p>
        </div>
<?php } 
     if (isset($deleteBook)){?>
        <div class="alert alert-info m-5" role="alert">
            <p class="mb-0">Suppression avec succes de <?php echo $deleteBook->getTitre(); ?> dans votre bibliothèque.</p>
            </div>
    <?php } 
    if (empty($catalogue)){?>
        <div class="alert alert-info m-4" role="alert">
            <p class="mb-0">Vous pouvez désormais <a href="index.php?route=livres">enrichir</a> votre bibliothèque.</p>
            </div>
    <?php } else{
    ?>

<div class="row row-cols-1 row-cols-md-3 g-4 m-3">
<?php  foreach($catalogue as list($idUser, $idLivre, $date, $score, $book)){ 
    ?>
    
    <div class="col">
    <?php if(!isset($date)){ ?>
        <div class="card text-center"  style="border: 5px solid; border-color: #55B1DB;">
        <?php } else{ ?>
        <div class="card text-center">
        <?php }?>
            <div class="card-body">
                
                <a class="card-title" href="index.php?route=livre&action=<?php echo $book->getLivreId(); ?>">
                    <img src="image/Livre_<?php echo $book->getLivreId(); ?>.jpg" style="width:100%; height:auto;" alt="couverture de <?php echo $book->getTitre();?> ">
                </a>
            </div>
            <div class="card-text text-muted">
                <?php if(isset($date)){?> 
                    Lu le: 
                <?php echo  date("F j, Y, g:i a", strtotime($date)); 
                        if(isset($score)){?> 
                            Note: 
                            <?php echo $score."/10"; } else{ ?>
                            <form name="noter" method="post" action="index.php?route=maBibliotheque&action=noter" >
                                <div class="input-group mb-3" style="margin: 0px auto; width: 120px;">
                                    <input name="note" type="text" class="form-control" placeholder="Note" aria-label="Note" aria-describedby="noteLivre" required>
                                    <span class="input-group-text" id="noteLivre">/10</span>
                                </div>
                                <button type="submit" name="idLivre" value="<?php echo $book->getLivreId(); ?>" class="btn btn-outline-dark">Noter</button>
                            </form> 
                    <?php }
                    } else{ ?>
                            <form name="lecture" method="post" action="index.php?route=maBibliotheque&action=lecture">
                                <button type="submit" name="idLivre" value="<?php echo $book->getLivreId(); ?>" class="btn btn-outline-dark">MARQUER LU</button>
                            </form>
                     Date de Publication: <?php echo $book->getPublishedDate(); } ?>
                
            </div>
            <div class="card-footer bg-danger mt-3">
                <form name="lecture" method="post" action="index.php?route=maBibliotheque&action=delete">
                    <button type="submit" name="idLivre" value="<?php echo $book->getLivreId(); ?>" class="btn btn-outline-danger" style="color:white;">SUPPRIMER</button>
                </form>
            </div>

        </div>
    </div>
<?php } }?>
</div>