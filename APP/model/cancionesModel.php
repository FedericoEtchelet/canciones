<?php
require_once "APP/model/model.php";
class cancionesModel extends model{

    function getAllSongs(){
        $db = $this->createConexion();
        $sentencia = $db->prepare("SELECT * FROM cancion");
        $sentencia->execute();
        $cancion = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $cancion;
    } 

    function getSongById($id){
        $db = $this->createConexion();
        $sentencia = $db->prepare("SELECT * FROM cancion WHERE id = ?");
        $sentencia->execute([$id]);
        $cancion = $sentencia->fetch(PDO::FETCH_OBJ);
        return $cancion;
    }

    function getSongByAlbum($id_album){
        $db= $this->createConexion();
        $sentencia = $db->prepare("SELECT * FROM album WHERE id_album = ? ");
        $sentencia->execute([$id_album]);
        $cancion = $sentencia->fetch(PDO::FETCH_OBJ);
        return $cancion;
    }
    function getSongByArtist($artista){
        $db= $this->createConexion();
        $sentencia = $db->prepare("SELECT * FROM cancion WHERE artista = ? ");
        $sentencia->execute([$artista]);
        $cancion= $sentencia->fetch(PDO::FETCH_OBJ);
        return $cancion;
    }

    function insertSong($id,$nombre,$artista,$id_album){
        $db = $this->createConexion();
        $sentencia = $db->prepare("INSERT INTO cancion(id,nombre,artista,id_album) VALUES (?,?,?,?)");
        $sentencia->execute([$id,$nombre,$artista,$id_album]);
    }

    function delete($id){
        $db=$this->createConexion();
        $sentencia = $db->prepare("DELETE FROM cancion  WHERE id =  ?");
        $sentencia->execute([$id]);
    }

}
?>