<?php

class PracticaReviewModel extends Model{


    public function afegeixUsuari($login, $nom, $email, $password){

        $sql = <<<QUERY
        INSERT INTO usuaris
        VALUES ('$login', '$nom', '$email', '$password', 0)
QUERY;
        $this->execute( $sql );

    }


    public function getTot($nom_taula){
        $sql = <<<QUERY
        SELECT
            *
        FROM
            $nom_taula
QUERY;
        $result = $this->getAll( $sql );
        return $result;
    }

}