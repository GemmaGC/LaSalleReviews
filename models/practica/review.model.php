<?php

class PracticaReviewModel extends Model{


    public function afegeixUsuari($login, $nom, $email, $password){

        $sql = <<<QUERY
        INSERT INTO usuaris
        VALUES ('', '$login', '$nom', '$email', '$password', 0)
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

    public function getUltim($nom_taula){
        $sql = <<<QUERY
        SELECT
            *
        FROM
            $nom_taula
        ORDER BY
            id DESC
        LIMIT
            1
QUERY;
        $result = $this->getAll($sql);
        return $result;
    }

    public function activaUsuari($login){
        $sql = <<<QUERY
        UPDATE
            usuaris
        SET
            actiu = 1
        WHERE
            login = '$login'
QUERY;
        $this->execute( $sql );

    }

    public function buscaUsuari($mail, $password)
    {
        $sql = <<<QUERY
        SELECT
            *
        FROM
            usuaris
        WHERE
            email = "$mail" AND password = "$password"
QUERY;
        $result = $this->getAll($sql);
        return $result;
    }



}