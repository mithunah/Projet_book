<h1 class="ms-3" style="font-style: italic;"><?php echo $book->getTitre();?></h1>
<h3 class="text-muted ms-3"><?php echo $book->getAuteur(); ?></h2>

<div class="table-responsive m-3">
<table class="table table-dark table-borderless">
    <tr>
        <td  rowspan="2">
        <img src="image/Livre_<?php echo $book->getLivreId(); ?>.jpg" style="height:700px;" alt="couverture de <?php echo $book->getTitre();?> ">
        </td>
        <td class="p-5 ">
            <?php $present = false;
            foreach($liste as $list){
                if(in_array($book->getLivreId(), $list)){
                     $present = true;
                     break;
                }
            }
            if(isset($_SESSION['id']) && !$present){ ?>
            <form name="ajout" method="post" action="index.php?route=maBibliotheque&action=ajout">
                <button type="submit" name="idLivre" value="<?php echo $book->getLivreId(); ?>" class="btn btn-outline-light">Ajouter à ma bibliotheque</button>
            </form> <?php } ?>

        </td>
    </tr>
    <tr>
        <td>
        <p class="lh-base p-4">Genre: <?php echo $book->getGenre(); ?></p>
        <p class="lh-base p-4"><?php echo $book->getResume();?></p>
        </td>
    </tr>
</table>
</div>


