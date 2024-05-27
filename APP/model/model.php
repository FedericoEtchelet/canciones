<?php
require_once "config.php";

class model
{

    protected $conexion;

    public function __construct()
    {
        $this->conexion = $this->createConexion();
        $this->deploy();
    }

    function createConexion()
    {
        try {
            $db = new PDO("mysql:host=" . MYSQL_HOST . ";charset=utf8", MYSQL_USER, MYSQL_PASS);

            $this->createOrUseDatabase($db);


        } catch (Exception $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }

        return $db;
    }

    /*FUNCION QUE VERIFICA SI EXISTE LA BASE DE DATOS, SI EXISTE HACE USO DE LA MISMA CASO CONTRARIO LA CREA.*/
    private function createOrUseDatabase($db)
    {
        $query = $db->query("SHOW DATABASES LIKE '" . MYSQL_DB . "'");
        $databaseExists = $query->rowCount() > 0;

        if (!$databaseExists) {
            $db->query("CREATE DATABASE " . MYSQL_DB . "");
        }

        $db->query("USE " . MYSQL_DB . "");
    }

    /*FUNCION QUE PERMITE LA CREACION DE TABLAS O ENTIDADES.*/
    private function deploy()
    {
        $this->createTables();
    }


    private function createTables()
    {
        // En la variable sql se coloca el su codigo de creacion de tablas
        $sql = "CREATE TABLE IF NOT EXISTS `cancion` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `nombre` varchar(100) NOT NULL,
                `artistta` varchar(250) NOT NULL,
                `id_album` int(11) NOT NULL,
                `finalizada` tinyint(1) NOT NULL,
                PRIMARY KEY (`id`),
                FOREIGN KEY (`id_album`) REFERENCES album(`id_album`)
                );
                
                CREATE TABLE IF NOT EXISTS `usuario` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `username` varchar(250) NOT NULL,
                `password` varchar(250) NOT NULL,
                `rol` varchar(20) NOT NULL,
                PRIMARY KEY (`id`)
                );
                
                CREATE TABLE IF NOT EXISTS `album` (
                `id_album` int(11) NOT NULL AUTO_INCREMENT,
                 `album` varchar(250) NOT NULL,
                 PRIMARY KEY (`id_album`)
                 
                    );
                    ";

        $this->conexion->query($sql);
    }
}