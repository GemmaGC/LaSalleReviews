<?php

class Exercici3GestorModel extends Model{

    /*
     * Funció que serveix per afegir noves imatges a la base de dades:
     ** $nom_img: nom de la imatge
     ** $url: url de la imatge
     ** $nom_taula: nom de la taula de la base de dades on afegir la imatge
     */
    public function afegeixImatge($nom_img, $url, $nom_taula){

        $con=mysqli_connect("localhost","root","root","monosdb");
        // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            $sql = <<<QUERY
            INSERT INTO $nom_taula
            VALUES ('', '$nom_img', '$url')
QUERY;
            $this->execute( $sql );
        }
    }

    /*
     * Funció que retorna el número d'imatges que té la taula
     ** $nom_taula: nom de la taula de la base de dades
     */
    public function getNumImatges($nom_taula){

        $sql = <<<QUERY
SELECT
    count(id) AS numImg
FROM
    $nom_taula
QUERY;

        $result = $this->getAll( $sql );
        return $result;
    }


    /*
     * Funció que retorna totes les imatges de la taula
     ** $nom_taula: nom de la taula de la base de dades
     */
    public function getImatges($nom_taula){

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