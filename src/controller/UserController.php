<?php
namespace App\controller;

use App\repository\UserRepository;
use App\view\View;

class UserController
{

    private View $view;
    private UserRepository $userRep;
    private PageController $page;

    public function __construct()
    {
        $this->view = new View();
        $this->userRep = new UserRepository();
        $this->page = new PageController;
    }
    
    public function create()
    {
       
        $verifExist = $this->userRep->verifExistence($_POST['mail'], $_POST['username']);
        if($verifExist === 'echec'){
            $user = $this->userRep->createUser($_POST);
            if(!empty($user)){
                return $this->view->render('/login', ['alertSuccess'=>'succesCreation']);
            }
            else{
                return $this->view->render('/login', ['alertEchec'=>'defaiteCreation']);
            }
        }
        else{
            return $this->view->render('/login', ['alertEchec'=>'dejaCreer']);
        }
    }

    public function read()
    {
        
        $userID = $this->userRep->getId($_POST['mailLogin'], $_POST['passwordLogin']);
        $_SESSION['id'] = $userID;
        return $this->page->readProfil($userID);
    }

    public function update(){
        $this->userRep->updateUser($_POST, $_SESSION['id']);
        return $this->page->readProfil($_SESSION['id'], 'update');
    }

    public function updateQuote(string $quote)
    {
        var_dump($quote);
        $this->userRep->updateQuote($quote, $_SESSION['id']);
        return $this->page->readProfil($_SESSION['id'], 'updateQuote');
    }

    public function delete()
    {
        $this->userRep->deleteUser($_SESSION['id']);
        session_unset();
        return $this->view->render('/login', ['alertDelete'=>'succesDelete']);
        
    }
}
