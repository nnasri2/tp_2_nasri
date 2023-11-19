<?php

 function createAddress($data) {
    global $conn;
    $query="INSERT INTO address VALUES (NULL,?,?,?,?,?)";
    If( $stmt=mysqli_prepare($conn, $query)){
    /* Lecture des marqueurs */
    mysqli_stmt_bind_param($stmt,"sisss",$data['street'],$data['street_nb'],$data['type'],$data['city'],$data['zipcode']);
    /* Exécution de la requête*/
    $result= mysqli_stmt_execute($stmt);
    return $result;
        }
        };


function getUserByTypeAndZipCode($type,$zipcode)
{
    global $conn;

    $query = "SELECT * FROM address WHERE type = '" . $type . "' AND zipcode = '" . $zipcode . "';";

    $result = mysqli_query($conn, $query);

        // avec fetch row : tableau indexé
        $data = mysqli_fetch_assoc($result);
        return $data;
}


?>