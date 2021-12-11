<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="assets/vendorb/bootstrap.min.css">
        <script src="assets/vendorb/bootstrap.bundle.min.js"></script>
</head>
    <body>

        <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Quokka</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?route=livres">Livre</a>
        </li>
       
        <li class="nav-item">
            <?php  
            if(!isset($_SESSION['id']) || (empty($_SESSION['id'])))
            {?><a class="nav-link" href="index.php?route=loginPage"> Se Connecter </a>
            <?php }else{ ?>
              <a class="nav-link" href="index.php?route=accountPage"> Compte </a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="index.php?route=deconnexion"> Deconnexion </a><?php } ?>
           
        </li>
      </ul>
      <form class="d-flex" name="search" action="index.php?route=search" method="post">
        <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" required>
        <button name="btnsearch" value="rechercher" class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
  
          </nav>
        </header>

   
    <div><?= $content; ?></div>
    
    
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">QUOKKA
          </a>
          <span class="text-muted">© 2021 Company, Inc</span>
            </div>
      </footer>
    </div>
        
    </body>
</html> 
