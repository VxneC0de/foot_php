<?php

//$connection = mysqli_connect("localhost", "root", "", "comida") or die("Could not connect to DB");

//CONNECTION A LA BASE DE DATOS EN PHPMYADMIN/LOCALHOST/INDEX.PHP:

    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'comida';
        public $conn;

        public function connect() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if (!$this->conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
	
	    public function disconnect() {
            $this->conn->close();
        }
    }

// MOSTRAR LAS CATEGORIAS

    class Categoria {
        private $db;

            public function __construct() {
                $this->db = new Database();
                $this->db->connect();
            }

            public function mostrarselect() {
                $query = "SELECT * FROM categorias";
                $result = $this->db->conn->query($query);
                echo "<select name='categoria'>";
                
                while ($categoria = $result->fetch_assoc()) {
                    echo "<option value='" . $categoria['id'] . "'>" . $categoria['nombre'] . "</option>";
                }
            
            echo "</select>";
            }
	
	        public function guardarcomidas($nombre, $precio, $categoria) {
                $query = "INSERT INTO platos  VALUES ('','$categoria','$nombre', '$precio',0)";
                if($this->db->conn->query($query)){
                echo "se ingreso con exito";}else{
                    echo "fallo al ingresar";
                }
            }

    }


//CALCULADORA


    class Calculadora{
        protected $numero1;
        protected $numero2;

        public function __construct($n1, $n2){
            $this->numero1 = $n1;
            $this->numero2 = $n2;
        }

    }

//

?>