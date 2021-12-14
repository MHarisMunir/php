<html>
    <head>
        <title>FORM-POST</title>
    </head>
    <body>
        <h1>Cookies</h1><br>

        <?php

        //Setting cookie
        $cookie_name = "Haris";
        $cookie_value = "Munir";

        setcookie($cookie_name, $cookie_value, time() + (36800), "/");

        if(!isset($cookie_name)){
            echo "Welcome user";
        }else{
            echo "Welcome Back user " . "<br>";
            echo "Your cookie value is " . $cookie_value;    
        }
        

        //Deleting cookie


        ?>
       
    </body>
</html>



