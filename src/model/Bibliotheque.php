<?php

namespace App\model;

class Bibliotheque{
    private int $livreid;
    private string $titre;
    private string $auteur;
    private string $resume;
    private string $publishedDate;
    private string $genre;

    public function getLivreId():int{
       return $this->livreid;
    }

    public function setLivreId(int $livreID):self{
        $this->livreid = $livreID;
        return $this;
    }
    
    public function getTitre():string{
        return $this->titre;
    }
    public function setTitre(string $title):self{
        $this->titre = $title;
        return $this;
    }
    public function getAuteur():string{
        return $this->auteur;
    }
    public function setAuteur(string $auteur):self{
        $this->auteur = $auteur;
        return $this;
    }
    public function getResume():string{
        return $this->resume;
    }
    public function setResume(string $resume):self{
        $this->resume = $resume;
        return $this;
    }
    public function getPublishedDate():string{
        return $this->publishedDate;
    }
    public function setPublishedDate(\DateTime $pdate):self{
        $this->publishedDate = $pdate-> format("F j, Y, g:i a"); 
        return $this;
    }
    public function getGenre():string{
        return $this->genre;
    }
    public function setGenre(string $genre):self{
        $this->genre = $genre;
        return $this;
    }
}
?>