<?php
require_once "APP/view/view.php";
class sonsgView extends view
{
    //PARTE ALBUM
    function albumForm()
    {
        $this->smarty->display("insertAlbum.tpl");
    }

    function showAlbumsAdmin($albums)
    {
        $this->smarty->assign("albums", $albums);
        $this->smarty->display("showAllAlbumsAdmin.tpl");
    }

    function showAlbums($albums)
    {
        $this->smarty->assign("albums", $albums);
        $this->smarty->display("showAllAlbums.tpl");
    }

    function editarAlbum($album){
        $this->smarty->assign("album",$album);
        $this->smarty->display("editAlbum.tpl");
    }

    //PARTE ALBUM

    //PARTE SONG

    function songForm()
    {
        $this->smarty->display("insertSong.tpl");
    }

    function showSongsByAdmin($canciones)
    {
        $this->smarty->assign("canciones", $canciones);
        $this->smarty->display("showAllSongsByAdmin.tpl");
    }

    function showSongs($canciones)
    {
        $this->smarty->assign("canciones", $canciones);
        $this->smarty->display("showAllSongs.tpl");
    }

    function showSongsByAlbumAdmin($canciones, $album)
    {
        $this->smarty->assign('canciones', $canciones);
        $this->smarty->assign('album', $album);
        $this->smarty->display('showSongsByAlbumAdmin.tpl');
    }

    function showSongsByAlbum($canciones, $album)
    {
        $this->smarty->assign('canciones', $canciones);
        $this->smarty->assign('album', $album);
        $this->smarty->display('showSongsByAlbum.tpl');
    }

    function editarSongs($cancion)
    {
        $this->smarty->assign("cancion", $cancion);
        $this->smarty->display("editarSong.tpl");
    }

    //PARTE SONG

    function home()
    {
        $this->smarty->display('home.tpl');
    }

    function adminHome()
    {
        $this->smarty->display('adminHome.tpl');
    }

    function showError($msgError)
    {
        $this->smarty->assign('msgError', $msgError);
        $this->smarty->display('errorMsg.tpl');
    }

}
?>