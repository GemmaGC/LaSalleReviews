<?php
/**
 * Created by PhpStorm.
 * User: claudiadauden
 * Date: 03/03/14
 * Time: 16:22
 */



class Exercici2MostraModel extends Model{

    public function build(){
        $con=mysqli_connect("localhost","root","root","monosdb");
        // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

    }

    //Retorna el número d'imatges que té la taula
    public function getNumImatges(){

$sql = <<<QUERY
SELECT
    count(id) AS numImg
FROM
    monos
QUERY;

        $result = $this->getAll( $sql );
    }

    //Retorna el nom i url de la primera imatge
    public function getPrimeraImatge() {

$sql = <<<QUERY
SELECT
    *
FROM
    monos
WHERE
    monos.id = 1
QUERY;

        $result = $this->getAll( $sql );
    }

    //Retorna totes les imatges de la taula
    public function getImatges(){

$sql = <<<QUERY
SELECT
    *
FROM
    monos
QUERY;

        $result = $this->getAll( $sql );
    }


}
