<?php

namespace App\repository;

use App\Database;
use App\model\Bibliotheque as ModelBook;


class BibliUniqueRepository extends Database
{



    public function getBooks(int $id): array
    {
        $tousBook = $this->createQuery('SELECT * FROM bibli_unique WHERE idUser = :idUser', ['idUser'=>$id]);
        $idBooks = $tousBook->fetchAll();
        for($i = 0; $i<count($idBooks);$i++){
        
            $idBooks[$i][4] = (new BookRepository)->getABook( $idBooks[$i]['idLivre'] );
            
        }
        return $idBooks;
    }

    public function create(int $idLivre, int $idUser): ModelBook
    {
        if((new BookRepository)->getABook($idLivre)){
            $this->createQuery('INSERT INTO bibli_unique(idLivre,idUser) VALUES (:idLivre, :idUser) ',
            ['idLivre'=> $idLivre, 'idUser'=> $idUser]
        );

            return (new BookRepository)->getABook($idLivre);
        }
        else{
            return 'echec';
        }
    }

    public function updateLecture(int $idLivre)
    {
        $this->createQuery('UPDATE bibli_unique SET luDate = :dateL WHERE idLivre = :idLivre AND idUser = :idUser', 
        ['dateL'=>(date("Y-m-d")), 'idLivre'=> $idLivre, 'idUser'=> $_SESSION['id']]);
    }
    
    public function updateNote(int $idLivre, int $note)
    {
        $this->createQuery('UPDATE bibli_unique SET note = :note WHERE idLivre = :idLivre AND idUser = :idUser', 
        ['note'=>$note, 'idLivre'=> $idLivre, 'idUser'=> $_SESSION['id']]);
    }

    public function deleteBook(int $idLivre, int $idUser)
    {
        $this->createQuery('DELETE FROM bibli_unique WHERE idLivre = :idLivre AND idUser = :idUser', 
        ['idLivre'=> $idLivre, 'idUser'=> $idUser]);
        return (new BookRepository)->getABook($idLivre);
    }

    public function verifDejaAdded(int $id): array
    {
        $tousBook = $this->createQuery('SELECT idLivre FROM bibli_unique WHERE idUser = :idUser', ['idUser'=>$id]);
        return $tousBook->fetchAll();
    }
}
