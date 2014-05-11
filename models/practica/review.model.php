<?php

class PracticaReviewModel extends Model{


    public function afegeixUsuari($login, $nom, $email, $password){

        $sql = <<<QUERY
        INSERT INTO usuaris
        VALUES ('', '$login', '$nom', '$email', '$password', 0, 'url')
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

//añadir un nuevo review
    public function afegeixReview($title, $description, $subject, $date, $score, $image, $nom, $login, $data_creacio){

        $sql = <<<QUERY
        INSERT INTO review
        VALUES ('','$title', '$description', '$subject', '$date', '$score', '$image', '$nom', '$login', '$data_creacio')
QUERY;
        $this->execute( $sql );

    }

    //Recupera les últimes 10 reviews
    public function get10R(){
        $sql = <<<QUERY
        SELECT
            *
        FROM
            review
        ORDER BY
            id DESC
        LIMIT
            10
QUERY;
        $result = $this->getAll($sql);
        return $result;
    }



}