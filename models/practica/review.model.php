<?php

class PracticaReviewModel extends Model{

    /**************/
    /*  GENERALS  */
    /**************/

    /**
     * Funció que torna tota la taula
     * @param $nom_taula    -> nom de la taula de la que volem obtenir tots els valors
     * @return mixed        -> valors de la taula
     */
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

    /**
     * Funció que s'encarrega de tornar l'última fila de la taula
     * @param $nom_taula    -> taula de la que volem obtenir l'última fila
     * @return mixed        -> valors de l'última fila
     */
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


    /**************/
    /*   USUARIS  */
    /**************/

    /**
     * Afegeix un nou usuari a la base de dades, a la taula 'usuaris'
     * @param $login        -> Login de l'usuari
     * @param $nom          -> nom de l'usuari
     * @param $email        -> email de l'usuari
     * @param $password     -> contrassenya de l'usuari
     * @param $url          -> url d'activació del compte de l'usuari
     */
    public function afegeixUsuari($login, $nom, $email, $password, $url){

        $sql = <<<QUERY
        INSERT INTO usuaris
        VALUES ('', '$login', '$nom', '$email', '$password', 0, '$url')
QUERY;
        $this->execute( $sql );

    }

    /**
     * Funció que s'encarrega d'activar l'usuari
     * @param $login    -> login de l'usuari a activar
     */
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

    /**
     * Funció que busca l'usuari amb el correu, contrassenya
     * @param $mail         -> mail de l'usuari
     * @param $password     -> contrassenya de l'usuari
     * @return mixed        -> totes les dades de l'usuari
     */
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

    /**
     * Funció que busca a un usuari amb una url d'activació concreta
     * @param $url
     * @return mixed
     */
    public function buscaFromUrl($url)
    {
        $sql = <<<QUERY
        SELECT
            *
        FROM
            usuaris
        WHERE
            urlActivacio = "$url"
QUERY;
        $result = $this->getAll($sql);
        return $result;
    }

    /**************/
    /*   REVIEWS  */
    /**************/

    /**
     * Funció que afegeix una nova review a la base de dades
     * @param $title
     * @param $description
     * @param $subject
     * @param $date
     * @param $score
     * @param $image
     * @param $nom
     * @param $login
     * @param $data_creacio
     */
    public function afegeixReview($title, $description, $subject, $date, $score, $image, $nom, $login, $data_creacio){

        $sql = <<<QUERY
        INSERT INTO review
        VALUES ('','$title', '$description', '$subject', '$date', '$score', '$image', '$nom', '$login', '$data_creacio')
QUERY;
        $this->execute( $sql );

    }

    /**
     * Funció que retorna les últimes 10 reviews
     * @return mixed
     */
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


    /**
     * Funció que retorna les reviews amb el contingut buscat
     * @return mixed
     */
    public function getBuscador($palabra){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            review
        WHERE
         title LIKE '%$palabra%' OR description LIKE '%$palabra%'


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }

    /**
     * @return null
     */
    public function updateReview($id, $title, $description, $subject, $date, $score, $image)
    {
        $sql = <<<QUERY
        UPDATE
            review
        SET
            title = '$title', description = '$description', subject = '$subject', date = '$date', score = '$score', image = '$image'
        WHERE
            id = '$id'
QUERY;
        $this->execute( $sql );

    }

    public function getMaxP(){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            review
           ORDER BY
            score DESC
        LIMIT
            1


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }

    public function getMaxDeuP(){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            review
           ORDER BY
            score DESC
        LIMIT
            10


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }

    public function getUsuariReview($login,$nom){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            review
        WHERE
         nom LIKE '$nom' AND login LIKE '$login'


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }

    public function getReview($id_oculta){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            review
        WHERE
        id LIKE '$id_oculta'


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }


    public function getUsuari($login){

        $sql = <<<QUERY
        SELECT DISTINCT
            *
        FROM
            usuaris
        WHERE
        id LIKE '$login'


QUERY;

        if(count($this->getAll($sql)) == 0){
            return null;


        }else{
            $var = $this->getAll($sql);
            return $var;


        }


    }
}