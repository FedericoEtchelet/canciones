<?php
class authHelper{
    function login($user){
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['USERNAME'] = $user->username;
            header("location:" . BASE_URL . "home");
            die();
        } 

    function checkLoggedIn()
    {
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
           return false;
            
        }
        else{
            return true;
        }
    }
    
}

?>