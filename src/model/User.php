<?php

namespace App\model;

class User{
    private int $userId;
    private string $nom;
    private string $prenom;
    private string $pseudo;
    private string $mail;
    private string $mdp;
    private string|null $quote;

    public function getUserId():int{
       return $this->userId;
    }

    public function setUserId(int $userID):self{
        $this->userId = $userID;
        return $this;
    }
    
    public function getName():string{
        return $this->nom;
    }
    public function setName(string $surname):self{
        $this->nom = $surname;
        return $this;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function setPrenom(string $givenName):self{
        $this->prenom=$givenName;
        return $this;
    }
    public function getPseudo():string{
        return $this->pseudo;
    }
    public function setPseudo(string $username):self{
        $this->pseudo=$username;
        return $this;
    }
    public function getMail():string{
        return $this->mail;
    }
    public function setMail(string $email):self{
        $this->mail=$email;
        return $this;
    }
    public function getMDP():string{
        return $this->mdp;
    }
    public function setMDP(string $mdpasse):self{
        $this->mdp=$mdpasse;
        return $this;
    }
    public function getQuote():string|null{
        return $this->quote;
    }
    public function setQuote(string|null $quote):self{
        $this->quote=$quote;
        return $this;
    }
}
?>