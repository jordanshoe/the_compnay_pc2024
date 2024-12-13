<?php
        include "../classes/User.php";

        //create an object
        $user = new User;

        //call the method
        $user->store($_POST);


?>