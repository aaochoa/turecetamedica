<?php
/******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "modelo para la gestio de usuarios"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************/ 

class Model_users extends CI_Model{
	

/******************************************************
/* Función para determinar si el usuario esta registrado 
********************************************************/ 
	public function can_log_in (){

		$this->db->where('idUsers',$this->input->post('idUsers'));
		$this->db->where('passW',md5($this->input->post('passW')));

		$query = $this->db->get('logIn');

		if ($query->num_rows()==1) {
			
			return true;
		} else {
			return false;
		}
	}

/******************************************************
/* Funcion encargada de entregar el rol y el nombre del usuario
********************************************************/ 
	public function myrol (){
		$this->db->where('idUsers',$this->input->post('idUsers'));
		$query = $this->db->get('logIn');

		if ($query->num_rows()==1) {
			
			foreach ($query->result() as $dato)
			{
				$data['rol'] = $dato->rol;
				$data['name'] = $dato->name;
			}

			return $data;
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion que agrega un usuario temporal con su respectiva clave random
********************************************************/ 
	public function add_temp_user (){
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cad = "";
		for ($i=0;$i<6;$i++) {
			$cad .= substr($str,rand(0,62),1);
		}

		$key=md5($cad);

		$data = array(
			'idUsers' => $this->input->post('idUsers'),
			'name' => $this->input->post('name'),
			'lastName' => $this->input->post('lastName'),
			'email' => $this->input->post('email'),
			'passW' => $cad,
			'rol' => $this->input->post('rol'),
			'key' => $key
			);

		$did_add_user= $this->db->insert('temp_users',$data);

		if ($did_add_user) {
			return true;
			} return false;
	}

/******************************************************
/* Funcion que devuelve los datos de la tabla temp_users
********************************************************/ 
	public function temp_users_sol (){

		$query = $this->db->get('temp_users');

		if ($query->num_rows()>0) {

			return $query->result();
		} else {
			return false;
		}
	}

/******************************************************
/* Funcion que agrega el usuario cuando la solicitud es aceptada
********************************************************/ 
	public function add_new_user (){
		$this->db->where('idUsers',$this->input->post('idUsers'));
		$query = $this->db->get('temp_users');

		if ($query->num_rows()==1) {
			foreach ($query->result() as $dato)
			{
				$data["idUsers"] = $dato->idUsers;
				$data["name"] = $dato->name;
				$data["lastName"] = $dato->lastName;
				$data["email"] = $dato->email;
				$data["passW"] = $dato->key;
				$data["rol"] = $dato->rol;
			}

			$did_add_user= $this->db->insert('logIn',$data);

			if ($did_add_user) {
				$this->row_delete();
				return true;
			}	 

		} else {
			return false;
		}
	}

/******************************************************
/* Funcion encargada de entregar el password del usuario temporal 
********************************************************/ 
	public function mypass ()
	{
		$this->db->where('idUsers',$this->input->post('idUsers'));
		$query = $this->db->get('temp_users');

		if ($query->num_rows()==1) {
			
			foreach ($query->result() as $dato)
			{
				$data = $dato->passW;
			}

			return $data;
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion para eliminar el usuario temporal
********************************************************/ 
	public function row_delete()
  	{
  		$this->db->where('idUsers',$this->input->post('idUsers'));
		$this->db->delete('temp_users');
  	}

/******************************************************
/* Funcion que devuelve los pacientes activos
********************************************************/ 
  	public function pacientes_activos (){

  		$paciente=1;
		$this->db->where('rol',$paciente);
		$query = $this->db->get('logIn');

		if ($query->num_rows()>0) {

			return $query->result();
		} else {
			return false;
		}
	}

/******************************************************
/* Funcion que devuelve los pacientes inactivos
********************************************************/ 
	public function pacientes_inactivos (){

  		$paciente= -1;
		$this->db->where('rol',$paciente);
		$query = $this->db->get('logIn');

		if ($query->num_rows()>0) {

			return $query->result();
		} else {
			return false;
		}
	}

/******************************************************
/* Funcion que borra de manera logica un usuario (desactiva la cuenta)
********************************************************/ 
	public function desactiva_cuenta ()
	{

		$data["rol"] = -1;
		$this->db->where('idUsers',$this->input->post('idUsers'));
		$this->db->update('logIn',$data);
	}	

/******************************************************
/* Funcion que devuelve los medicos activos (generales/especialistas)
********************************************************/ 
	public function medicos_activos ()
	{

  		$general = 2;
  		$especialista = 3;
		$this->db->where('rol',$general);
		$this->db->or_where('rol',$especialista);

		$query = $this->db->get('logIn');

		if ($query->num_rows()>0) {

			return $query->result();
		} else {
			return false;
		}
	}
/**************************************************************************************************************************

/******************************************************
/* Funcion que agrega el usuario cuando la solicitud es aceptada
********************************************************/ 
	public function solicitud ()
	{
			$data["idUsuarioSol"] = $this->session->userdata('idUsers');
			$data["mailUsuario"] = $this->input->post('email');
			$data["solicitud"] = $this->input->post('sugerencia');

			$did_add_user= $this->db->insert('solicitudesG',$data);

			if ($did_add_user) {
				return true;
			} else {
			return false;
			}
	}

/******************************************************
/* Funcion encargada de entregar lo que se encuentre en la tabla de solicitudes generales
********************************************************/ 
	public function solicitudesG ()
	{
		$query = $this->db->get('solicitudesG');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de eliminar la solicitud seleccionada
********************************************************/ 
	public function delete_solicitud ()
	{
		$this->db->where('idsolicitudesG',$this->input->post('idsolicitudesG'));
		$this->db->delete('solicitudesG');
	}

/******************************************************
/* Funcion encargada de entregar todos los elementos en la tabla de solicitudes de adición de tratamientos 
********************************************************/ 
	public function sol_treatments ()
	{
		$query = $this->db->get('temp_treatments');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion para eliminar el tratamiento temporal
********************************************************/ 
	public function row_deleteT()
  	{
  		$this->db->where('idTreatments',$this->input->post('idTreatments'));
		$this->db->delete('temp_treatments');
  	}

/******************************************************
/* Funcion que agrega el tratamiento cuando la solicitud es aceptada
********************************************************/ 
	public function add_new_treatment (){
		$this->db->where('idTreatments',$this->input->post('idTreatments'));
		$query = $this->db->get('temp_treatments');

		if ($query->num_rows()==1) {

			foreach ($query->result() as $dato)
			{
	
				$data["nameT"] = $dato->nameT;
				$data["enfermedad"] = $dato->enfermedad;
			}

			$did_add_treatment= $this->db->insert('treatments',$data);

			if ($did_add_treatment) {
				$this->row_deleteT();
				return true;
			}	 

		} else {
			return false;
		}
	}

/******************************************************
/* Funcion que agrega la solicitud a la tabla de tratamientos temporales
********************************************************/ 
	public function add_temp_treatment ()
	{

		$data = array(
			'idSolicitante' => $this->session->userdata('idUsers'),
			'nameT' => $this->input->post('nameT'),
			'enfermedad' => $this->input->post('enfermedad')
			);

		$did_add_treatment= $this->db->insert('temp_treatments',$data);

		if ($did_add_treatment) {
			return true;
			} return false;
	}

/******************************************************
/* Funcion encargada de entregar el email del usuario solicitante 
********************************************************/ 
	public function myemail ()
	{
		$this->db->where('idUsers',$this->input->post('idSolicitante'));
		$query = $this->db->get('logIn');

		if ($query->num_rows()==1) {
			
			foreach ($query->result() as $dato)
			{
				$data = $dato->email;
			}

			return $data;
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de entregar lo que se encuentre en la tabla de tratamientos
********************************************************/ 
	public function tratamientos ()
	{
		$query = $this->db->get('treatments');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de entregar todos los elementos en la tabla de solicitudes de adición de medicamentos
********************************************************/ 
	public function sol_medicine ()
	{
		$query = $this->db->get('temp_noPOS');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion para eliminar el medicamento personal
********************************************************/ 
	public function row_deleteM()
  	{
  		$this->db->where('idnoPOS',$this->input->post('idnoPOS'));
		$this->db->delete('temp_noPOS');
  	}

/******************************************************
/* Funcion que agrega el medicamento cuando la solicitud es aceptada
********************************************************/ 
	public function add_new_medicine (){
		$this->db->where('idnoPOS',$this->input->post('idnoPOS'));
		$query = $this->db->get('temp_noPOS');

		if ($query->num_rows()==1) {

			foreach ($query->result() as $dato)
			{
	
				$data["nameMedicine"] = $dato->nameMedicine;
				$data["howitcomes"] = $dato->howitcomes;
				$data["whatitdoes"] = $dato->whatitdoes;
			}

			$did_add_medicine= $this->db->insert('noPOS',$data);

			if ($did_add_medicine) {
				$this->row_deleteM();
				return true;
			}	 

		} else {
			return false;
		}
	}

/******************************************************
/* Funcion que agrega la solicitud a la tabla de tratamientos temporales
********************************************************/ 
	public function add_temp_medicine ()
	{

		$data = array(
			'idSolicitante' => $this->session->userdata('idUsers'),
			'nameMedicine' => $this->input->post('nameMedicine'),
			'howitcomes' => $this->input->post('howitcomes'),
			'whatitdoes' => $this->input->post('whatitdoes')
			);

		$did_add_medicine= $this->db->insert('temp_noPOS',$data);

		if ($did_add_medicine) {
			return true;
			} return false;
	}

/******************************************************
/* Funcion encargada de entregar lo que se encuentre en la tabla de medicamentos
********************************************************/ 
	public function medicine ()
	{
		$query = $this->db->get('noPOS');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de entregar lo que se encuentre en la tabla de grupos de apoyo
********************************************************/ 
	public function grupos_apoyo ()
	{
		$query = $this->db->get('gruposapoyo');

		if ($query->num_rows()>0) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de entregar lo que se encuentre en la tabla de medicamentos
********************************************************/ 
	public function add_grupo ()
	{
		$data = array(
			'nombregrupo' => $this->input->post('nombregrupo'),
			'enfermedad' => $this->input->post('enfermedad'),
			'profesional' => $this->input->post('profesional')
			);

		$did_add_grupo= $this->db->insert('gruposapoyo',$data);

		if ($did_add_grupo) {
			return true;
			} return false;
	}

/******************************************************
/* Funcion encargada de entregar la información del perfil del paciente
********************************************************/ 
	public function profile_info ()
	{
		$this->db->where('idPaciente',$this->session->userdata('idUsers'));
		$query = $this->db->get('pacienteProfile');

		if ($query->num_rows()==1) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de actualizar la información del perfil
********************************************************/
	public function actualizar_info()
	{
		$data = array(
			
			'estrato' => $this->input->post('estrato'),
			'birthDate' => $this->input->post('birthDate'),
			'gender' => $this->input->post('gender'),
			'sisbenEps' => $this->input->post('sisbenEps'),
			'direccion' => $this->input->post('direccion')
			
			);

		$this->db->where('idPaciente',$this->session->userdata('idUsers'));
		$this->db->update('pacienteProfile', $data); 
	}

/******************************************************
/* Funcion encargada de entregar la información del perfil del medico general/especialista
********************************************************/ 
	public function profile_infoM ()
	{
		$this->db->where('idMedicoEG',$this->session->userdata('idUsers'));
		$query = $this->db->get('medicoEG');

		if ($query->num_rows()==1) {
			
			return $query->result();
			
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de btener la especialidad de un medico
********************************************************/
	public function myespecialidad ()
	{
		$this->db->where('idMedicoEG',$this->session->userdata('idUsers'));
		$query = $this->db->get('medicoEG');

		if ($query->num_rows()==1) {
			
			foreach ($query->result() as $dato)
			{
				$data = $dato->especialidad;
			}

			return $data;
		} else {
			return false;
		}	
	}

/******************************************************
/* Funcion encargada de actualizar la información del medico especialista/general
********************************************************/
	public function actualizar_infoM()
	{		
		$especialidad = $this->myespecialidad();
		if ($especialidad==NULL) 
		{
			$data = array(
				
				'tarifasParticulares' => $this->input->post('tarifasParticulares'),
				'referenciasJob' => $this->input->post('referenciasJob'),
				'otherJobPlace' => $this->input->post('otherJobPlace'),
				'college' => $this->input->post('college'),
				'experience' => $this->input->post('experience')
				
				);

			$this->db->where('idMedicoEG',$this->session->userdata('idUsers'));
			$this->db->update('medicoEG', $data); 
		
		} else 
		{
			$data = array(
				
				'tarifasParticulares' => $this->input->post('tarifasParticulares'),
				'referenciasJob' => $this->input->post('referenciasJob'),
				'otherJobPlace' => $this->input->post('otherJobPlace'),
				'college' => $this->input->post('college'),
				'experience' => $this->input->post('experience'),
				'especialidad' => $this->input->post('esécialidad')
				
				);

			$this->db->where('idMedicoEG',$this->session->userdata('idUsers'));
			$this->db->update('medicoEG', $data);
		}
	}

/******************************************************
/* Función para determinar si el password es el correcto
********************************************************/ 
	public function is_it_correct (){

		$this->db->where('idUsers',$this->session->userdata('idUsers'));
		$this->db->where('passW',md5($this->input->post('passW')));

		$query = $this->db->get('logIn');

		if ($query->num_rows()==1) {
			
			return true;
		} else {
			return false;
		}
	}

/******************************************************
/* Función para almacenar el nuevo password del usuario
********************************************************/ 
public function change_pass ()
	{
		$data = array(
			'passW' => md5($this->input->post('npassW'))
			);
		$this->db->where('idUsers',$this->session->userdata('idUsers'));
		$this->db->update('logIn', $data);
	}
}