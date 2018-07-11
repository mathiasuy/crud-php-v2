<?php
  abstract class DBAbstractModel {

     private static $db_host = 'localhost';
     private static $db_user = 'root';
     private static $db_pass = '';
     protected $db_name = 'Futbolistas';
     protected $query;
     private $rows = array();
     private $conn;
     private $result;
     public $mensaje = 'Hecho';

     # métodos abstractos para ABM de clases que hereden
     abstract protected function Listar();
     abstract protected function Ver();
     abstract protected function Insertar();
     abstract protected function Eliminar();
     abstract protected function Editar();

     # Conectar a la base de datos
    private function open_connection() {
       $this->conn = new mysqli(self::$db_host, self::$db_user,
       self::$db_pass, $this->db_name);
       $this->conn->set_charset("utf8");
    }

    # Desconectar la base de datos
    private function close_connection() {
      $this->conn->close();
    }

    # Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
    protected function execute_single_query() {
       if($_POST) {
         $this->open_connection();
         $this->result = $this->conn->query($this->query);
         $this->close_connection();
       } else {
         $this->mensaje = 'Metodo no permitido';
       }
       return $this->result;
    }

    # Traer resultados de una consulta en un Array
    protected function get_results_from_query() {
       $this->open_connection();
       $result = $this->conn->query($this->query);
       while ($this->rows[] = $result->fetch_assoc());
       $result->close();
       $this->close_connection();
       return $this->rows;
    }
  }
?>
