<?php
Class alumnoModel extends CI_Model{

    public function __construc(){
        parent::__construc();
    }
    
    //Mostrar alumnos
    public function mostrarAlumnos()
    {
        $query = $this->db->query('SELECT * FROM alumnos');
        return $query->result();
    }
    
    //Agregar alumnos
    public function agregarAlumno($carnet, $nombre, $apellido, $fecha)
    {
        $this->db->query('INSERT INTO alumnos(Carnet, Nombres, Apellidos, FechaNacimiento) VALUES("'.$carnet.'", "'.$nombre.'", "'.$apellido.'", "'.$fecha.'");');
    }

    //consultar solo un alumno
    public function updateUno($id)
    {
        $consulta=$this->db->query('SELECT * FROM `alumnos` WHERE id='.$id.';');
        return $consulta->result();
    }

    //Modificar alumnos
    public function updateAlumno($id, $carnet, $nombre, $apellido, $fecha)
    {
        $this->db->query('UPDATE alumnos SET Carnet= "'.$carnet.'", Nombres = "'.$nombre.'", Apellidos = "'.$apellido.'", FechaNacimiento = "'.$fecha.'" WHERE  id = '.$id.';');
    }

    //Eliminar alumnos
    public function eliminarAlumno($id)
    {
        $this->db->query('DELETE FROM alumnos WHERE id='.$id);
    }
}

?>