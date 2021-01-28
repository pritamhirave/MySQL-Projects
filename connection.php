<?php

     $conn =mysqli_connect($server="localhost", $username= "root",$password= "", $database="users");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>