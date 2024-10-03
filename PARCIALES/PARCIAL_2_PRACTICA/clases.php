<?php
include 'Prestable.php';

abstract class RecursoBiblioteca implements Prestable {
    public $id;
    public $titulo;
    public $autor;
    public $anioPublicacion;
    public $estado;
    public $fechaAdquisicion;
    public $tipo;

    public function __construct($id=null, $titulo=null, $autor=null, $anioPublicacion=null, $estado=null, $fechaAdquisicion=null) {
     $this-> id = $id;
     $this->titulo = $titulo;
     $this->autor = $autor;
     $this->anioPublicacion = $anioPublicacion;
     $this->estado=$estado;
     $this->fechaAdquisicion = $fechaAdquisicion;
    }
    abstract public function obtenerDetallesPrestamo(): string;

    public function getId(){
        return this->$id;
    }
    public function getTitulo(){
        return this->$titulo;
    }
    public function getEstado(){
        return this->$estado;
    }
}

class Libro extends RecursoBiblioteca {
    private $isbn;
    public function __construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $isbn){
        parent::__construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion);
        $this->isbn = $isbn;
    }
    public function obtenerDetallesPrestamo(): string{
        return "Libro: " . {$this->titulo} . " ISBN: " . {$this->numero};         
    }
}

class Revista extends RecursoBiblioteca {
    private $numeroEdicion = 0;
    public function __construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion, $numeroEdicion){
        parent::__construct($id, $titulo, $autor, $anioPublicacion, $estado, $fechaAdquisicion);
        $this->numeroEdicion = $numeroEdicion;
    }
    public function obtenerDetallesPrestamo(): string{
return "Revista: " . {$this->titulo} . "por ".$this->autor . ", número de edición: ".$this->numeroEdicion;
    }
}

class DVD extends RecursoBiblioteca {
    private $duracion;

    public function obtenerDetallesPrestamo(): string{

    }
}

//<CAnva</CAnvas>
// Implementar las clases Libro, Revista y DVD aquí

class GestorBiblioteca extends RecursoBiblioteca{
    private $recursos = [];

    public function cargarRecursos() {
        $json = file_get_contents('biblioteca.json');
        $data = json_decode($json, true);
        
   //     foreach ($data as $recursoData) {
           // $recurso = new RecursoBiblioteca($recursoData);
            $this->recursos[] = $recurso;
     //   }
        
        return $this->recursos;
    }

    public function obtenerDetallesPrestamo(): string{

    }
    // Implementar los demás métodos aquí
}