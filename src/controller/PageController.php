<?php
namespace App\controller;

use App\repository\BibliUniqueRepository;
use App\repository\BookRepository;
use App\repository\UserRepository;
use App\view\View;

class PageController
{

    private View $view;
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->bookRepository = new BookRepository();
    }

    public function readAccueil()
    {
        $book = $this->bookRepository->getSomeBooks();
        $this->view->render('/accueil', ['book'=>$book]);
    }

    public function readLogin()
    {
        $this->view->render('/login');
    }

    public function readLivres()
    {
        $book = $this->bookRepository->getBooks();
        $this->view->render('/bibliotheque', ['book'=>$book]);
    }

    public function readProfil(int $userID, string $event = '')
    {
        $userRep = new UserRepository;
        $user = $userRep->getUser($userID);
        if(!empty($user)){
            if($event === 'update'){
                return $this->view->render('/profil', ['user'=>$user, 'alertUpdate'=>$event]);
            }
            elseif($event === 'echec'){
                return $this->view->render('/profil', ['user'=>$user, 'alertEchec'=>$event]);
            }
            elseif($event === 'updateQ'){
                return $this->view->render('/profil', ['user'=>$user, 'alertQuote'=>$event]);
            }
            return $this->view->render('/profil', ['user'=>$user]);
        }
        else{
            return $this->view->render('/login', ['alertEchec'=>'seConnecter']);
        }
    }

    public function readBibliUnique()
    {
        $reqbooks = new BibliUniqueRepository;
        $books = $reqbooks->getBooks($_SESSION['id']);
        return $this->view->render('/bibliothequeUnique', ['catalogue'=> $books]);
    }

    public function readSearch(string $recherche)
    {
        $book = $this->bookRepository->getRechercher($recherche);
        if(empty($book)){
            return $this->view->render('/search', ['alertExistence'=>'echec']);
        }
        $this->view->render('/search', ['book'=>$book]);
    }
}
