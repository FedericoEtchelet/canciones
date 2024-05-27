<?php
require_once "./libs/Smarty.class.php";
class view{
    protected $smarty;

    public function __construct(){
        $this->smarty = new smarty();
        $this->smarty->assign("base", BASE_URL);
    }

}
?>