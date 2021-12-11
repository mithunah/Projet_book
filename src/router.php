<?php

namespace App;

use App\controller\BibliothequeController;
use App\controller\BookController;
use App\controller\PageController;
use App\controller\UserController;

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;
        $state = $_GET['state'] ?? null;

        $pageController = new PageController();
        $bibliController = new BibliothequeController;

        if (isset($_GET['route'])) {
            if ('livre' === $route && $action) {
                return $bibliController->readLivre($action);
                
            } 
            elseif('livres'=== $route){
                return $pageController->readLivres();
            }
            
            elseif ('loginPage' === $route) {
               return $pageController->readLogin();
            }
            elseif('accountPage' === $route && isset($_SESSION['id'])){
                return $pageController->readProfil($_SESSION['id']);
            }
            elseif('deconnexion' === $route){
                session_unset();
                return $pageController->readAccueil();
            }
            elseif('maBibliotheque' === $route){
                
                if('ajout' === $action && isset($_POST['idLivre'])){
                    return $bibliController->ajoutLivre($_POST['idLivre']);
                }
                elseif('lecture' === $action && isset($_POST['idLivre'])){
                    return $bibliController->updateLecture($_POST['idLivre']);
                }
                elseif('noter' === $action && isset($_POST['idLivre']) && isset($_POST['note'])){
                    return $bibliController->updateNote($_POST['idLivre'], $_POST['note']);
                }
                elseif('delete' === $action && isset($_POST['idLivre'])){
                    return $bibliController->deleteLivre($_POST['idLivre'],$_SESSION['id']);
                }
                return $pageController->readBibliUnique();
                
            }
            elseif('identification' === $route){
                $userController = new UserController;
                if('quit' === $action){
                    return $userController->delete();
                }
                elseif(!empty($_POST)){
                    if(isset($_POST['identification']) && 'signUp' === $_POST['identification']){
                        return $userController->create();
                    }
                    elseif(isset($_POST['identification']) && 'signIn' === $_POST['identification']){
                        return $userController->read();
                    }
                    elseif(isset($_POST['updateUser']) && 'update' === $_POST['updateUser']){
                        return $userController->update();
                    }
                    elseif('quote' === $action && isset($_POST['btnquote'])){
                        $quote = $_POST['quote'].",".$_POST['quoteAuteur'].",".$_POST['quoteSource'];
                        return $userController->updateQuote($quote);
                    }
                }
            }
            elseif('search' === $route && $_POST['search']){
                return $pageController->readSearch($_POST['search']);
            }
            
        } else {
            return $pageController->readAccueil();
         
         
        }
    }
}
?>