<?php

namespace App\repository;

use App\Database;
use App\model\User;

class UserRepository extends Database
{
    public function getId(string $email, string $password): int
    {
        $result = $this->createQuery(
            'SELECT id FROM user WHERE mail = :email AND mdp = :motdepasse',
            ['email' => $email , 'motdepasse' => $password]
        );
        
        return ($result->fetch())['id'];
    }
    public function getUser(int $id): User
    {   
        $result = $this->createQuery(
            'SELECT * FROM user WHERE id = :id' ,
            ['id' =>$id]
        );
        
        return $this->buildObject( $result->fetch());
    }
    
    private function buildObject(array $row): User
    {
        $user = new User;
        $user->setUserId((int) $row['id']);
        $user->setName($row['nom']);
        $user->setPrenom($row['prenom']);
        $user->setPseudo($row['pseudo']);
        $user->setMail($row['mail']);
        $user->setMDP($row['mdp']);
        $user->setQuote($row['quote']);
        return $user;
    }

    public function createUser(array $row):User {

        $this->createQuery('INSERT INTO user(nom,prenom,mail,mdp,pseudo) VALUES(:nom, :prenom, :mail, :mdp, :pseudo)',
        ['nom'=> $row['surname'],
            'prenom'=> $row['givenName'],
            'mail'=> $row['mail'],
            'mdp'=> $row['password'],
            'pseudo'=> $row['username']]
        );
    
        $req = $this->getId($row['mail'], $row['password']);
        return $this->getUser($req);
    }

    public function updateUser(array $row, int $id): User
    {
        $this->createQuery('UPDATE user SET nom = :nom , prenom = :prenom, mail = :mail, mdp = :mdp, pseudo = :pseudo WHERE id = :userID', 
        ['nom'=> $row['surname'],
        'prenom'=> $row['givenName'],
        'mail'=> $row['mail'],
        'mdp'=> $row['password'],
        'pseudo'=> $row['username'],
        'userID'=>$id]
        );

        return $this->getUser($id);
    }

    public function updateQuote(string $quote, int $id): User
    {
        var_dump($quote);
        $this->createQuery('UPDATE user SET quote = :quote WHERE id = :userID', 
        ['quote'=> $quote,
        'userID'=>$id]
        );

        return $this->getUser($id);
    }

    public function deleteUser(int $id)
    {
        $this->createQuery('DELETE FROM user WHERE id = :id', ['id'=> $id]);
    }

    public function verifExistence(string $email, string $pseudo): array|string
    {

        $result = $this->createQuery(
            'SELECT id FROM user WHERE mail = :email OR pseudo = :pseudo',
            ['email' => $email , 'pseudo' => $pseudo]
        );
        if($result->fetch()){
        return ($result->fetch());
        }
        else{
            return 'echec';
        }
    }
}