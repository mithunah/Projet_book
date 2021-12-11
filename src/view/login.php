<?php if (isset($alertSuccess)){?>
    <div class="alert alert-success m-3" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p class="mb-0">Vous avez réussi a créer un compte avec brio. Veuillez maintenant vous connecter afin de créer votre plus belle bibliotheque.</p>
        </div>
<?php }
if (isset($alertDelete)){?>
    <div class="alert alert-success m-3" role="alert">
        <h4 class="alert-heading">Vous avez réussi a supprimer compte. Bonne journée !</h4>
        
        </div>
<?php }
    if (isset($alertEchec) && $alertEchec === 'defaiteCreation'){?>
        <div class="alert alert-danger m-3" role="alert">
            Impossible de créer votre bibliothèque. Verifiez bien les champs renseignés.
        </div>
<?php }
    if (isset($alertEchec) && $alertEchec === 'dejaCreer'){?>
        <div class="alert alert-danger m-3" role="alert">
            Impossible de créer votre bibliothèque. Un compte avec ce mail ou ce pseudo existe deja.
        </div>
<?php }
    if (isset($alertEchec) && $alertEchec === 'seConnecter'){?>
    <div class="alert alert-danger m-3" role="alert">
        Veuillez vous connecter ou vous inscrire. 
    </div>
<?php }?>

<h1 class="headingIn m-3">Accèder à mon univers</h1>
<div class= "identification">
    <form name="login" action="index.php?route=identification" method="post">
        <div class="row mb-3 ">
            <div class="col md-auto">
                <div class="form-floating">
                    <input name="mailLogin" type="email" class="form-control" id="floatingEmail" placeholder="name@dom.com" required>
                    <label for="floatingEmail">Email address</label>
                </div>
            </div>
            <div class="col md-auto">
                <div class="form-floating">
                    <input name="passwordLogin" type="password" class="form-control" id="floatingPassword" placeholder="password" required>
                     <label for="floatingPassword">Password</label>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col d-grid gap-2">
                <button type="submit" name="identification" value="signIn" class="btn btn-outline-dark">Se Connecter</button>
            </div>
        </div>

    </form>
</div>



<h1 class="headingIn m-3">Créer mon univers</h1>
<div class= "identification">
    <form class="row g-3" name="sign up" action="index.php?route=identification" method="post">
        <div class="col-md-6">
            <label for="inputName" class="form-label">Nom</label>
            <input name="surname" type="text" class="form-control" id="inputName" required>
        </div>
        <div class="col-md-6">
            <label for="inputPrenom" class="form-label">Prenom</label>
            <input name="givenName" type="text" class="form-control" id="inputPrenom" required>
        </div>
        <div class="col-md-6">
            <label for="mailidf" class="form-label">Email</label>
            <input name="mail" type="email" class="form-control" id="mailidf" required>
        </div>
        <div class="col-md-6">
            <label for="passwordidf" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="passwordidf" required>
        </div>
        <div class="col-12">
            <label for="pseudoIdf" class="form-label">Pseudo</label>
            <input name="username" type="text" class="form-control" id="pseudoIdf" placeholder="Poussiere d'Etoile" required>
        </div>
        <div class="col d-grid gap-2">
            <button type="submit" name="identification" value="signUp" class="btn btn-outline-dark">Créer ma bibliothèque</button>
        </div>
    </form>
</div>
