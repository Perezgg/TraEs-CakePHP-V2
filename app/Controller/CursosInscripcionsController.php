<?php
App::uses('AppController', 'Controller');

class CursosInscripcionsController extends AppController {

	var $name = 'CursosInscripcions';
    var $helpers = array('Session', 'Form', 'Time', 'Js');
    var $components = array('Auth','Session', 'RequestHandler');
   	var $paginate = array('CursosInscripcion' => array('limit' => 2, 'order' => 'CursosInscripcion.curso_id ASC'));


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CursosInscripcion->recursive = 1;
		$cicloIdActual = $this->getLastCicloId();
		$this->paginate['CursosInscripcion']['limit'] = 8;
		$this->paginate['CursosInscripcion']['order'] = array('CursosInscripcion.curso_id' => 'ASC');
		$this->paginate['CursosInscripcion']['conditions'] = array('Inscripcion.ciclo_id' => $cicloIdActual);
		
		$this->loadModel('Ciclo');
		$this->loadModel('Alumno');
				
		$ciclosId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('ciclo_id')));
        $ciclos = $this->Ciclo->find('list', array('fields'=>array('nombre'), 'conditions' => array('id' => $ciclosId)));
        $cursos = $this->CursosInscripcion->Curso->find('list', array('fields'=>array('id', 'nombre_completo_curso')));
		$inscripcions = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('id', 'legajo_nro')));
        $alumnosId = $this->CursosInscripcion->Inscripcion->find('list', array('fields'=>array('alumno_id')));
        $alumnos = $this->Alumno->find('list', array('fields'=>array('nombre_completo_alumno'), 'conditions' => array('id' => $alumnosId)));
  
  		$this->redirectToNamed();
		
		$conditions = array();
		
		if(!empty($this->params['named']['curso_id']))
		{
			$conditions['CursosInscripcion.curso_id ='] = $this->params['named']['curso_id'];
		}
		if(!empty($this->params['named']['inscripcion_id']))
		{
			$conditions['CursosInscripcion.inscripcion_id ='] = $this->params['named']['inscripcion_id'];
		}
		$cursosInscripcions = $this->paginate('CursosInscripcion', $conditions);
		$this->set(compact('cursosInscripcions', 'cicloActual', 'cursos', 'inscripcions', 'ciclos', 'alumnos'));
   }
}
