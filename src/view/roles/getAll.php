<?php 
    //var_dump($data);
    foreach ($data as $role) {
        echo $role->getId()." ".$role->getNom()."<br><br>";
    }
?>