<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/******************************************************* 
 Autor : LABG1E2
 Tipo de programa: "Controlador principal"
 Lenguaje: PHP, HTML, CSS, JAVASCRIPT
 Descripción: Tu Receta Médica
********************************************************/ 

class Main extends CI_Controller {

/******************************************************
/* Funciones encargdas de renderizar las vistas
********************************************************/ 
	public function index()
	{
		 redirect('main/principal');
	}

	public function principal()
	{
		$this->load->view('principal');
	}

	public function medicamentos()
	{
		$this->load->view('medicamentos');
	}

	public function eps()
	{
		$this->load->view('eps');
	}

	public function nopos()
	{
		$this->load->view('nopos');
	}

	public function login ()
	{
		$this->load->view('login');
	}

	public function signup ()
	{
		$this->load->view('signup');
	}

	public function restricted ()
	{
		$this->load->view('restricted');
	}

	public function restricted2 ()
	{
		$this->load->view('restricted2');
	}

	public function thanks ()
	{	
		$this->load->view('thanks');
	}

	public function changepass ()
	{
		if ($this->session->userdata('is_logged_in'))
		{
			$this->load->view('changepass');
		}
	}

	public function pacientesact()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query'] = $this->model_users->pacientes_activos();
			$this->load->view('pacientesact',$data); 
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function pacientesinact()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query'] = $this->model_users->pacientes_inactivos();
			$this->load->view('pacientesinact',$data); 
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function medicosact()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query'] = $this->model_users->medicos_activos();
			$this->load->view('medicosact',$data); 
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function solicitudesGU()
	{	
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')!=0)) 
		{
			$this->load->view('solicitudesGU'); 
		} 
		else if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0))
		{
			$data['query'] = $this->model_users->solicitudesG();
			$this->load->view('solicitudesGUA',$data);

		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function members ()
	{
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			
			$data['query'] = $this->model_users->temp_users_sol();
			$this->load->view('membersA',$data);
		}
		else if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==1)) 
		{
			
			$this->load->view('members');
		}
		else if ($this->session->userdata('is_logged_in') and (($this->session->userdata('my_rol')==2)
				or ($this->session->userdata('my_rol')==3))) 
		{

			$this->load->view('membersM');
		} else 
		{
			redirect('main/principal');
		}
	}

	public function medicos ()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in')and ($this->session->userdata('my_rol')==1)) 
		{
			$data['query'] = $this->model_users->medicos_activos();
			$this->load->view('medicos',$data);
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function solTreatment ()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in')and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query'] = $this->model_users->sol_treatments();
			$this->load->view('solTreatmentA',$data);
		} 
		else if ($this->session->userdata('is_logged_in') and (($this->session->userdata('my_rol')==2)
				or ($this->session->userdata('my_rol')==3))) 
		{

			$this->load->view('solTreatment');
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function solMedicine ()
	{	$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in')and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query'] = $this->model_users->sol_medicine();
			$this->load->view('solMedicineA',$data);
		} 
		else if ($this->session->userdata('is_logged_in') and (($this->session->userdata('my_rol')==2)
				or ($this->session->userdata('my_rol')==3))) 
		{

			$this->load->view('solMedicine');
		} else 
		{
			redirect('main/restricted2');
		}
	}

	public function tratamientos()
	{	
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')!=0)) 
		{
			$data['query']=$this->model_users->tratamientos();
			$this->load->view('tratamientos', $data); 
		} 
		else
		{
			redirect('main/restricted2');
		}
	}

	public function medicine()
	{	
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')!=0)) 
		{
			$data['query']=$this->model_users->medicine();
			$this->load->view('medicine', $data); 
		} 
		else
		{
			redirect('main/restricted2');
		}
	}

	public function apoyo()
	{	
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			$data['query']=$this->model_users->grupos_apoyo();
			$this->load->view('apoyoA', $data); 
		} 
		else
		{	
			$data['query']=$this->model_users->grupos_apoyo();
			$this->load->view('apoyo', $data);
		}
	}

	public function perfil()
	{	
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			
			redirect('main/restricted2');
		}
		else if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==1)) 
		{
			$data['query']=$this->model_users->profile_info();
			$this->load->view('perfil', $data);
		}
		else if ($this->session->userdata('is_logged_in') and (($this->session->userdata('my_rol')==2)
				or ($this->session->userdata('my_rol')==3))) 
		{
			$data['query']=$this->model_users->profile_infoM();
			$this->load->view('perfilM',$data);
		} else 
		{
			redirect('main/principal');
		}
	}

	public function editar ()
	{
		$this->load->model('model_users');

		if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==0)) 
		{
			
			redirect('main/restricted2');
		}
		else if ($this->session->userdata('is_logged_in') and ($this->session->userdata('my_rol')==1)) 
		{
			$data['query']=$this->model_users->profile_info();
			$this->load->view('editar', $data);
		}
		else if ($this->session->userdata('is_logged_in') and (($this->session->userdata('my_rol')==2)
				or ($this->session->userdata('my_rol')==3))) 
		{
			$data['query']=$this->model_users->profile_infoM();
			$this->load->view('editarM', $data);
		} else 
		{
			redirect('main/principal');
		}
	}
/******************************************************
/* Fin funciones de las vistas
********************************************************/ 


/******************************************************
/* Función para determinar si el usuario esta registrado
********************************************************/ 
	public function login_validation ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idUsers','Numero del documento','required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('passW','Clave','required|trim|md5|xss_clean');
	
		if ($this->form_validation->run()) 
		{
			
			$temp = $this->model_users->myrol();
			$my_rol = $temp['rol'];
			$my_name = $temp['name'];

			$data = array(

				'idUsers' => $this->input->post('idUsers'), 
				'is_logged_in'=>1,
				'my_rol'=> $my_rol,
				'my_name' => $my_name
				);

			$this->session->set_userdata($data);


			redirect('main/members');
		} else 
		{
			$this->load->view('login');

		}

	}

/******************************************************
/* Función para gestionar la solicitud de registro 
********************************************************/ 
	public function signup_request ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idUsers','Numero del documento','required|trim|is_unique[logIn.idUsers]|is_unique[temp_users.idUsers]|xss_clean');
		$this->form_validation->set_rules('name','Nombre','required|trim|xss_clean');
		$this->form_validation->set_rules('lastName','Apellido','required|trim|xss_clean');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[logIn.email]|is_unique[temp_users.email]|xss_clean');
		$this->form_validation->set_rules('rol','Rol','required|trim|xss_clean');
		$this->form_validation->set_message('is_unique','El numero de documento o e-mail ya está registrado');
		

		if ($this->form_validation->run()) {

			if ($this->model_users->add_temp_user()) 
			{
				
				$this->load->view('thanks');
			}
			} else 
			{
			
			$this->load->view('signup');
			$this->form_validation->set_message('is_unique','El numero del documento o el e-mail ya está registrado');

		}
	}

/******************************************************
/* Función encargada de validar los datos ingresados en el login
********************************************************/ 
	public function validate_credentials ()
	{
		$this->load->model('model_users');

		if ($this->model_users->can_log_in()) 
		{
			return true;
		} else 
		{
			$this->form_validation->set_message('validate_credentials','Numero del documento/Clave incorrectos');
			return false;
		}
	}

/******************************************************
/* Función encargada de destruir los datos de la sesion
********************************************************/ 
	public function logout ()
	{
		if ($this->session->userdata('is_logged_in'))
		{
			$this->session->sess_destroy();
			redirect('main/principal','refresh');
		}
	}

/******************************************************
/* Función encargada de responder a la solicitud de registro Aceptar/rechazar
********************************************************/ 
	public function acceptSol ()
	{
		$this->load->model('model_users');

		$password = $this->model_users->mypass();

		if ($this->input->post('mybutton')=="accept") 
		{
		
			if ($this->model_users->add_new_user())
			{
			
				$subject = "Registro Tu Receta Médica";
				$message = "<p><h2>Su solicitud ha sido procesada exitosamente.</h2></p>";
				$message .= "<p><h3>Su usuario es:</h3>".$this->input->post('idUsers')."<br><h3>y su contraseña es:</h3>".$password."</p>";
				$message .= "<p><br> <a href='".base_url()."main/login'>Click aquí</a> para poder ingresar al sitio</p>";
				$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
				$email = $this->input->post('email');
				
				$this->sendMail($email, $subject, $message);
				
				echo "\n\nEl usuario ha sido agregado exitosamente";
				redirect('main/members', 'refresh');

			} else 
			{
				echo "\n\nEl usuario no pudo ser agregado";
				redirect('main/members', 'refresh');
				
			}
	
		} else 
		{
			$this->model_users->row_delete();

			$subject = "Registro Tu Receta Médica";
			$message = "<p><h2>Su solicitud ha sido rechazada</h2></p>";
			$message .= "<p>Debido a las pliticas de registro de usuarios se ha considerado que ud no posee los requisitos para registrarse en el sitio.</p>";
			$message .= "<p><br>Cualquier inquietud comunicarse con: <h3>turecetamedica@gmail.com</h3></p>";
			$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
			$email = $this->input->post('email');
			
			$this->sendMail($email, $subject, $message);
			
			echo "\n\nLa solicitud ha sido procesada exitosamente";
			redirect('main/members', 'refresh');

		}
	}

/******************************************************
/* Función encargada de configurar y enviar los Email
********************************************************/ 
	public function sendMail($email, $subject, $message)
	{
    	$config = Array(
  			'protocol' => 'smtp',
  			'smtp_host' => 'ssl://smtp.googlemail.com',
  			'smtp_port' => 465,
  			'smtp_user' => 'turecetamedica@gmail.com', 
  			'smtp_pass' => 'turecetanotiene23', 
  			'mailtype' => 'html',
  			'charset' => 'utf-8',
  			'wordwrap' => TRUE
		);	

        $this->load->library('email', $config);
      	$this->email->set_newline("\r\n");
      	$this->email->from('turecetamedica@gmail.com'); 
      	$this->email->to($email);
      	$this->email->subject($subject);
      	$this->email->message($message);
      
      if ($this->email->send())
     	{
      		return true;
     	} else 
     	{
     		show_error($this->email->print_debugger());
     		return false;
    	}

	}

/******************************************************
/* Función encargada de desactivar la cuenta de un usuario
********************************************************/ 
	public function desactivarCuenta ()
	{
		$this->load->model('model_users');

		$this->model_users->desactiva_cuenta();
		redirect('main/members','refresh');

		
	}

/**************************************************************************************************************************

/******************************************************
/* Función encargada de manejar las solicitudes generales de los usuarios registrados
********************************************************/ 

	public function solicitudG ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idUsers','Numero del documento','required|trim|xss_clean');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|xss_clean');
		$this->form_validation->set_rules('sugerencia','Sugerencia, queja o reclamo','required|trim|xss_clean');
		

		if ($this->form_validation->run()) {

			if ($this->input->post('idUsers')==$this->session->userdata('idUsers')) 
			{
				
				$this->model_users->solicitud();
				$this->members();
			}
			} else 
			{
			
			$this->solicitudesGU();

		}
	}
/******************************************************
/* Función encargada de manejar las solicitudes generales de los usuarios registrados del lado del administrador
********************************************************/ 
	public function solicitudHandling()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idUsuarioSol','Numero del documento','required|trim|xss_clean');
		$this->form_validation->set_rules('mailUsuario','Email','required|trim|valid_email|xss_clean');
		$this->form_validation->set_rules('sugerencia','Sugerencia, queja o reclamo','required|trim|xss_clean');

		if ($this->form_validation->run())
		{
			$this->model_users->delete_solicitud();
			$this->solicitudesGU();
		} else 
		{
			$this->members();
		}

	}

/******************************************************
/* Función encargada de manejar las solicitudes de tratamientos
********************************************************/ 
	public function solicitudTreatment()
	{
		$this->load->model('model_users');

		if ($this->input->post('mybutton')=="accept") 
		{
		
			if ($this->model_users->add_new_treatment())
			{
			
				$subject = "Solicitudes Tu Receta Médica";
				$message = "<p><h2>Su solicitud ha sido procesada exitosamente.</h2></p>";
				$message .= "<p><br> <a href='".base_url()."main/login'>Click aquí</a> para poder ingresar al sitio</p>";
				$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
				$email = $this->model_users->myemail();
				
				$this->sendMail($email, $subject, $message);
				
				echo "\n\nLa solicitud ha sido procesada exitosamente";
				redirect('main/members', 'refresh');

			} else 
			{
				echo "\n\nEl elemento solicitado no pudo ser agregado";
				redirect('main/members', 'refresh');
				
			}
	
		} else 
		{
			$this->model_users->row_deleteT();

			$subject = "Solicitudes Tu Receta Médica";
			$message = "<p><h2>Su solicitud ha sido rechazada</h2></p>";
			$message .= "<p><br>Cualquier inquietud comunicarse con: <h3>turecetamedica@gmail.com</h3></p>";
			$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
			$email = $this->model_users->myemail();
			
			$this->sendMail($email, $subject, $message);
			
			echo "\n\nLa solicitud ha sido procesada exitosamente";
			redirect('main/members', 'refresh');

		}

	}

/******************************************************
/* Función para gestionar la solicitud de adicion de tratamientos
********************************************************/ 
	public function treatment_request ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idSolicitante','Numero del documento','required|trim|xss_clean');
		$this->form_validation->set_rules('nameT','Nombre del Tratamiento','required|trim|xss_clean');
		$this->form_validation->set_rules('enfermedad','Enfermedad relacionada','required|trim|xss_clean');
		

		if ($this->form_validation->run()) {

			if ($this->model_users->add_temp_treatment()) 
			{
				
				$this->members();
			}
			} else 
			{
			
			$this->solTreatment();

		}
	}

/******************************************************
/* Función encargada de manejar las solicitudes de medicamentos
********************************************************/ 
	public function solicitudMedicine()
	{
		$this->load->model('model_users');

		if ($this->input->post('mybutton')=="accept") 
		{
		
			if ($this->model_users->add_new_medicine())
			{
			
				$subject = "Solicitudes Tu Receta Médica";
				$message = "<p><h2>Su solicitud ha sido procesada exitosamente.</h2></p>";
				$message .= "<p><br> <a href='".base_url()."main/login'>Click aquí</a> para poder ingresar al sitio</p>";
				$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
				$email = $this->model_users->myemail();
				
				$this->sendMail($email, $subject, $message);
				
				echo "\n\nLa solicitud ha sido procesada exitosamente";
				redirect('main/members', 'refresh');

			} else 
			{
				echo "\n\nEl elemento solicitado no pudo ser agregado";
				redirect('main/members', 'refresh');
				
			}
	
		} else 
		{
			$this->model_users->row_deleteM();

			$subject = "Solicitudes Tu Receta Médica";
			$message = "<p><h2>Su solicitud ha sido rechazada</h2></p>";
			$message .= "<p><br>Cualquier inquietud comunicarse con: <h3>turecetamedica@gmail.com</h3></p>";
			$message .= "<p><br><br> El equipo de Tu Receta Medica le desea un buen día.</p>";
			$email = $this->model_users->myemail();
			
			$this->sendMail($email, $subject, $message);
			
			echo "\n\nLa solicitud ha sido procesada exitosamente";
			redirect('main/members', 'refresh');

		}

	}

/******************************************************
/* Función para gestionar la solicitud de adición de medicamentos 
********************************************************/ 
	public function medicine_request ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('idSolicitante','Numero del documento','required|trim|xss_clean');
		$this->form_validation->set_rules('nameMedicine','Nombre del Medicamento','required|trim|xss_clean');
		$this->form_validation->set_rules('howitcomes','Presentación','required|trim|xss_clean');
		$this->form_validation->set_rules('whatitdoes','Enfermedad que trata','required|trim|xss_clean');
		

		if ($this->form_validation->run()) {

			if ($this->model_users->add_temp_medicine()) 
			{
				
				$this->members();
			}
			} else 
			{
			
			$this->solMedicine();

		}
	}

/******************************************************
/* Función para gestionar la solicitud de adición de un grupo de apoyo por parte dcel administrador 
********************************************************/ 
	public function addApoyo ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('nombregrupo','Nombre del grupo','required|trim|xss_clean');
		$this->form_validation->set_rules('enfermedad','Enfermedad','required|trim|xss_clean');
		$this->form_validation->set_rules('profesional','Medico/Profesional encargado','required|trim|xss_clean');
		

		if ($this->form_validation->run()) {

			if ($this->model_users->add_grupo()) 
			{
				
				$this->members();
			}
			} else 
			{
			
			$this->apoyo();

		}
	}

/******************************************************
/* Función para gestionar la edición del perfil de un usuario
********************************************************/ 
	public function editarPerfil ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');
		$this->form_validation->set_rules('estrato','Estrato','required|trim|xss_clean');
		$this->form_validation->set_rules('birthDate','Fecha de nacimiento','required|trim|xss_clean');
		$this->form_validation->set_rules('gender','Genero','required|trim|xss_clean');
		$this->form_validation->set_rules('sisbenEps','Sisben/EPS','required|trim|xss_clean');
		$this->form_validation->set_rules('direccion','Direccion','required|trim|xss_clean');

		if ($this->form_validation->run()) 
		{

			$this->model_users->actualizar_info();
			$this->perfil();
		} else 
		{
			$this->editar();
		}
	}

/******************************************************
/* Función para gestionar la edición del perfil de un medico general/especialista
********************************************************/ 
	public function editarPerfilM ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');
		$especialidad = $this->model_users->myespecialidad();
		
		if ($especialidad==NULL) 
		{
			
			$this->form_validation->set_rules('tarifasParticulares','Tarifas particulares','required|trim|xss_clean');
			$this->form_validation->set_rules('referenciasJob','Referencias','required|trim|xss_clean');
			$this->form_validation->set_rules('otherJobPlace','Otro lugar de trabajo','required|trim|xss_clean');
			$this->form_validation->set_rules('college','Centro de estudios','required|trim|xss_clean');
			$this->form_validation->set_rules('experience','Experiencia','required|trim|xss_clean');

			if ($this->form_validation->run()) 
			{

				$this->model_users->actualizar_infoM();
				$this->perfil();
			} else 
			{
				$this->editar();
			}
		} else 
		{
			$this->form_validation->set_rules('tarifasParticulares','Tarifas particulares','required|trim|xss_clean');
			$this->form_validation->set_rules('referenciasJob','Referencias','required|trim|xss_clean');
			$this->form_validation->set_rules('otherJobPlace','Otro lugar de trabajo','required|trim|xss_clean');
			$this->form_validation->set_rules('college','Centro de estudios','required|trim|xss_clean');
			$this->form_validation->set_rules('experience','Experiencia','required|trim|xss_clean');
			$this->form_validation->set_rules('especialidad','Especialidad','required|trim|xss_clean');

			if ($this->form_validation->run()) 
			{

				$this->model_users->actualizar_infoM();
				$this->perfil();
			} else 
			{
				$this->editar();
			}
		}
	}

/******************************************************
/* Función para realizar el cambio de contraseña
********************************************************/ 
	public function new_password ()
	{
		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('passW','Clave','required|trim|md5|callback_validate_password|xss_clean');
		$this->form_validation->set_rules('npassW','Nueva Clave','required|trim|xss_clean');
		$this->form_validation->set_rules('cpassW','Confirme la Clave','required|trim|xss_clean');
	
		if ($this->form_validation->run()) 
		{
			$this->model_users->change_pass();
			redirect('main/members','refresh');
		} else 
		{
			$this->load->view('changepass');

		}

	}


/******************************************************
/* Función encargada de validar los datos ingresados en el formulario de cambio de contraseña
********************************************************/ 
	public function validate_password ()
	{
		$this->load->model('model_users');

		if ($this->model_users->is_it_correct()) 
		{
			return true;
		} else 
		{
			$this->form_validation->set_message('validate_password','La clave ingresada no coincide con la clave del usuario');
			return false;
		}
	}

}

//http://turecetamedica.vv.si