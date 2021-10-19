<?php
    class conexion extends PDO{
        private $tipo_de_base='mysql';
        private $host='localhost';
        private $nombre_de_base='db_longblob';
        private $user='root';
        private $contra='';

        public function __construct(){
            try {
                parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->user,$this->contra);
                

            } catch (PDOException $e) {
                echo "Ha surgido un error y no se pudo conectar a la base de datos. Detalles: ".$e->getMessage();
            }
        }
    }

?>