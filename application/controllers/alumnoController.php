<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnoController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('alumnoModel');
        $this->load->helper('url');
        $this->load->database('default');
    }

    public function listar()
	{
        $data['mostrarAlumnos'] = $this->alumnoModel->mostrarAlumnos();

        $this->output->set_header("Content-Type: application/json; charset=utf-8");
  
            echo json_encode( $data );
    }

    
    //Metodo para mostrar todos los alumnos
	public function mostrar()
	{
        // $data['mostrarAlumnos'] = $this->alumnoModel->mostrarAlumnos();
    $this->load->view('MostrarAlumnos.php'/*,$data*/);
    }

    //Metodo para redirigir a la vista para agregar alumnos
    // public function agregarAlumno(){
    //     $this->load->view('AgregarAlumnos.php');
    // }

    //Metodo para agregar alumnos
    public function insertarAlumnos()
    {
        if($this->input->post("nombre") && $this->input->post("carnet") && $this->input->post("apellido") && $this->input->post("fecha") != null){
        $carnet = $this->input->post('carnet');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $fecha = $this->input->post('fecha');
        $data['agregarAlumno'] = $this->alumnoModel->agregarAlumno($carnet, $nombre, $apellido, $fecha);
            echo true;
        }else{
            echo false;
        }
        // $this->mostrar();
        // if ($data==true) {
        //     alert("Dato Agregado");
        // }else {
        //     alert("Fallo al agregar");
        // }
    }
    
    //Metodo para redirigir a la vista para modificar alumnos
    public function buscarAlumno(){
        $id = $this->input->post('id');        
        $data = $this->alumnoModel->buscarUno($id);  

        $this->output->set_header("Content-Type: application/json; charset=utf-8");

        echo json_encode( $data );      
    }

    //Metodo para modificar alumnos
    public function updateAlumnos()
    {   
        if($this->input->post("nombre") && $this->input->post("carnet") && $this->input->post("apellido") && $this->input->post("fecha") != null){
        $id = $this->input->post('id');
        $carnet = $this->input->post('carnet');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $fecha = $this->input->post('fecha');
        $data['updateAlumno'] = $this->alumnoModel->updateAlumno($id, $carnet, $nombre, $apellido, $fecha);
            echo true;
        }else{
            echo false;
        }
        // $this->mostrar();
    }


    //Metodo para redirigir a la vista para eliminar alumnos
    // public function eliminarAlumno(){
    //     $this->load->view('EliminarAlumnos.php');
    // }

    //Metodo para eliminar alumnos
    public function deleteAlumnos()
    {   
        if($this->input->post("id")!= null){
        $id = $this->input->post('id');
        $data['eliminarAlumno'] = $this->alumnoModel->eliminarAlumno($id);
        echo true;
        }else{
            echo false;
        }
        // $this->mostrar();
    }
	
}
