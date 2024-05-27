<?php
require_once "APP/view/view.php";
class sonsgView extends view{
    function showSongs($canciones){
        $this->smarty->assign("canciones", $canciones);
        $this->smarty->display("songList.tpl");
    }   
}
?>