<?php

namespace App\repository;

use App\Database;
use App\model\Bibliotheque as ModelBook;

class BookRepository extends Database
{
    public function getBooks()
    {
        $tousBook = $this->createQuery('SELECT * FROM bibliotheque');
        return $tousBook->fetchAll();
    }

    public function getABook(int $id): ModelBook
    {
        
        $result = $this->createQuery(
            'SELECT * FROM bibliotheque WHERE idLivre = :bookId',
            ['bookId' => $id]
        );
       
        return $this->buildObject($result->fetch());
       
    }

    private function buildObject(array $row): ModelBook
    {
        $abook = new ModelBook;
        $abook->setLivreId((int) $row['idLivre']);
        $abook->setTitre($row['titre']);
        $abook->setAuteur($row['auteur']);
        $abook->setResume($row['resume']);
        $abook->setPublishedDate(new \DateTime($row['datePublication']));
        $abook->setGenre($row['genre']);
        

        return $abook;
    }
 

    public function getSomeBooks(){
        $fourni = $this->createQuery('SELECT * FROM bibliotheque ORDER BY datePublication DESC LIMIT 5');
        return $fourni->fetchAll();
    }

    public function getRechercher(string $search){
        $fourni = $this->createQuery('SELECT * FROM bibliotheque WHERE titre LIKE "%'.$search.'%" ');
        return $fourni->fetchAll();
    }
}
?>