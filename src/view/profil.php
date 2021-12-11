<h3 class="m-4">Bienvenue, <?php echo $user->getPseudo(); ?></h3>
<?php if (isset($alertUpdate)){?>
    <div class="alert alert-success" role="alert">
        <p class="mb-0">Vos informations ont été mis à jour votre compte.</p>
        </div>
<?php }
  if (isset($alertQuote)){?>
    <div class="alert alert-success" role="alert">
        <p class="mb-0">Votre citation a été mis à jour.</p>
        </div>
<?php }
if (isset($alertEchec) && $alertEchec === 'echec'){?>
  <div class="alert alert-warning" role="alert">
      <p class="mb-0">Votre compte n'a pas pu etre supprimer.</p>
      </div>
<?php }?>


<div class="card border-dark mx-4">
  <div class="card-header" style="background-color: black; color: white;">Profil</div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $user->getName()." ".$user->getPrenom()  ; ?></h5>
    <p class="card-text">Vous pouvez acceder à votre bibliotheque ou changer vos informations.</p>
    <a href="index.php?route=maBibliotheque"><button type="button" class="btn btn-outline-danger">Ma Bibliotheque</button></a>
    <button type="button" class="btn my-3" style="color:#694E8F;border-color:#B07DF4"  data-bs-toggle="modal" data-bs-target="#changerFenetre">
    Changer mes informations</button>
    <div class="modal fade" id="changerFenetre" tabindex="-1" aria-labelledby="ChangementUser" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ChangementUser">Changements</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" name="changer" action="index.php?route=identification" method="post">
                        <div class="col-md-6">
                            <label for="inputName" class="form-label">Nom</label>
                            <input name="surname" type="text" class="form-control" id="inputName" value="<?php echo $user->getName(); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPrenom" class="form-label">Prenom</label>
                            <input name="givenName" type="text" class="form-control" id="inputPrenom" value="<?php echo $user->getPrenom(); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mailidf" class="form-label">Email</label>
                            <input name="mail" type="email" class="form-control" id="mailidf" value="<?php echo $user->getMail(); ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label for="passwordidf" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="passwordidf" required>
                        </div>
                        <div class="col-12">
                            <label for="pseudoIdf" class="form-label">Pseudo</label>
                            <input name="username" type="text" class="form-control" id="pseudoIdf" value="<?php echo $user->getPseudo(); ?>" required>
                        </div>
                        
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" name="updateUser" value="update" class="btn btn-outline-dark">Update mon identité</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  </div>
  <div class="card-footer text-muted">
    Ou bien <a href="index.php?route=identification&action=quit">Supprimer</a> votre compte.
  </div>
</div>

<div class="card border-dark m-4">
  <div class="card-header"style="background-color: black; color: white;">
    Favorite Quote
  </div>
  <div class="card-body">
  <?php if(null !== $user->getQuote()){ 
        $quote = explode(',', $user->getQuote(),3);
        //var_dump($quote);?>  
  
    <blockquote class="blockquote mb-0">
      <p><?php echo $quote[0];?></p>
          <footer class="blockquote-footer"><?php echo $quote[1];?> <cite title="Source Title"><?php echo $quote[2];?></cite></footer>    
      </blockquote>
        <?php } else{ ?>
          <blockquote class="blockquote mb-0">
          <p>Une citation qui vous a conquis.</p>
          <footer class="blockquote-footer">Auteur <cite title="Source Title">Source</cite></footer>
          </blockquote>
      <?php } ?>


  
<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#maCitation">
  Définir ma citation
</button>


<div class="modal fade" id="maCitation" tabindex="-1" aria-labelledby="maCitationm" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="maCitationm">Ma Citation </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="citation" action="index.php?route=identification&action=quote" method="post">
          <div class="input-group mb-3" >
          <span class="input-group-text" id="profilQuote">Citation</span>
              <input name="quote" type="text" class="form-control" placeholder="citation" aria-label="citation" aria-describedby="profilQuote" required>
          </div>
          <div class="input-group mb-3" >
          <span class="input-group-text" id="profilQuoteA">Auteur</span>
              <input name="quoteAuteur" type="text" class="form-control" placeholder="auteur" aria-label="auteur" aria-describedby="profilQuoteA" required>
          </div>
          <div class="input-group mb-3">
          <span class="input-group-text" id="profilQuoteS">Source</span>
              <input name="quoteSource" type="text" class="form-control" placeholder="source" aria-label="source" aria-describedby="profilQuoteS" required>
          </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" name="btnquote" value="bookQuote" class="btn btn-outline-dark">Modifier</button>
        </form>
      </div>
    </div>
  </div>
</div>

    
  </div>
</div>
