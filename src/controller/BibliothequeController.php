<?php
namespace App\controller;

use App\repository\BibliUniqueRepository;
use App\repository\BookRepository;
use App\view\View;

class BibliothequeController
{

    private View $view;
    private BibliUniqueRepository $biblirep;

    public function __construct()
    {
        $this->view = new View();
        $this->biblirep = new BibliUniqueRepository;
    }

    public function readLivre(int $id)
    {
        $bookRepository = new BookRepository();
        $book = $bookRepository->getABook($id);
        if(isset($_SESSION['id'])){ 
            $listBook = (new BibliUniqueRepository)->verifDejaAdded($_SESSION['id']);
            return $this->view->render('/livre', ['book' => $book, 'liste'=>$listBook]);
        }
        return $this->view->render('/livre', ['book' => $book]);
    }
    
    public function ajoutLivre(int $idLivre)
    {
        $ajouter = $this->biblirep->create($idLivre, $_SESSION['id']);
        $bibliotheque = $this->biblirep->getBooks($_SESSION['id']);
        return $this->view->render('/bibliothequeUnique', ['ajoutBook'=> $ajouter, 'catalogue'=>$bibliotheque]);
    }

    public function updateLecture(int $idLivre)
    {
        $this->biblirep->updateLecture($idLivre);
        $bibliotheque = $this->biblirep->getBooks($_SESSION['id']);
        return $this->view->render('/bibliothequeUnique', ['catalogue'=>$bibliotheque]);
    }

    public function updateNote(int $idLivre, int $note)
    {
        $this->biblirep->updateNote($idLivre, $note);
        $bibliotheque = $this->biblirep->getBooks($_SESSION['id']);
        return $this->view->render('/bibliothequeUnique', ['catalogue'=>$bibliotheque]);
    }

    public function deleteLivre(int $idLivre, int $idUser){
        $del = $this->biblirep->deleteBook($idLivre, $idUser);
        $bibliotheque = $this->biblirep->getBooks($_SESSION['id']);
        return $this->view->render('/bibliothequeUnique', ['deleteBook'=> $del, 'catalogue'=>$bibliotheque]);
  
    }
}