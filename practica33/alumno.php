<?php
class Alumno {
    private $nombre;
    private $apellidos;
    private $numeroControl;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setNumeroControl($numeroControl) {
        $this->numeroControl = $numeroControl;
    }

    public function mostrarDatos (){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "Número de Control: " . $this->numeroControl . "<br>";
    }

    public function generarCorreo() {
        $correo = strtolower($this->numeroControl) . "@example.com";
        return $correo;
    }
}