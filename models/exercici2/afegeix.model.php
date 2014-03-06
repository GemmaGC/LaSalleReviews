<?php
/**
 * Created by PhpStorm.
 * User: claudiadauden
 * Date: 06/03/14
 * Time: 15:35
 */

class Exercici2AfegeixModel extends Model{

    public function afegeixImatge($nom_img, $url){

        $con=mysqli_connect("localhost","root","root","monosdb");
        // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            $sql = <<<QUERY
            INSERT INTO monos
            VALUES ('', '$nom_img', '$url')
QUERY;
            $this->execute( $sql );
        }
    }

} 