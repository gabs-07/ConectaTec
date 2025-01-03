
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        class Conexion {
            private $servidor;
            private $usuario;
            private $contrasena;
            private $base_de_datos;
            public $conexion;

            public function __construct($servidor, $usuario, $contrasena, $base_de_datos) {
                $this->servidor = $servidor;
                $this->usuario = $usuario;
                $this->contrasena = $contrasena;
                $this->base_de_datos = $base_de_datos;
                $this->conectar();
            }

            private function conectar() {
                $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->base_de_datos);
                if ($this->conexion->connect_error) {
                    echo "Error de conexión: " . $this->conexion->connect_error;
                } else {
                    echo "<p>Conexion exitosa</p>";
                }
            }
        }

        // Crear una instancia de la clase Conexion
        $conexion = new Conexion("localhost", "root", "admin", "conectaTec");

    ?>
