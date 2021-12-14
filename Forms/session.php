<?php

    //Start Session
    session_start();

    //Create Session Variable
    $_SESSION["First_Name"] = "Haris";

    //Read Session
    //session_start();
    echo $_SESSION["First_Name"];

    //Delete Session
  //  session_start();
    
    if(isset($_SESSION["First_Name"])){
        unset($_SESSION["First_Name"]);
    }


?>