<?php
require_once "view.php";
class authView extends view{


    function getLoginForm(){
        $this->smarty->display('loginForm.tpl');
    }
}

?>