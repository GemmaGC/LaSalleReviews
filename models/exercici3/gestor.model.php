<?php

class Exercici3GestorModel extends Model{

    /*
     * Funció que serveix per afegir noves imatges a la base de dades:
     ** $nom_img: nom de la imatge
     ** $url: url de la imatge
     ** $nom_taula: nom de la taula de la base de dades on afegir la imatge
     */
    public function afegeixImatge($nom_img, $url, $nom_taula){

        $sql = <<<QUERY
        INSERT INTO $nom_taula
        VALUES ('', '$nom_img', '$url')
QUERY;
       // var_dump($sql);
        $this->execute( $sql );

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


    public function modificaImatge($id, $nom_img, $url_img, $nom_taula){

        $sql = <<<QUERY
        UPDATE $nom_taula
        SET nom_img = "$nom_img", url_img = "$url_img"
        WHERE id = $id
QUERY;

        $this->execute( $sql );

    }

    public function esborraImatge($id,  $nom_taula)
    {
        $sql = <<<QUERY
        DELETE FROM $nom_taula
        WHERE id = $id

QUERY;

        $this->execute( $sql );

    }


}