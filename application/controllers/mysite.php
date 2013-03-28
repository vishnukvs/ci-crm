<?
defined('BASEPATH') OR exit('No direct script access allowed');

class MySite extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model("register_model");
        $this->load->library("form_validation");
    }

	public function index(){

    	$this->load->view('login');
	}
	public function quotes(){
			
		 $this->load->view('quotes_view');
		
	}

	public function events(){
		$this->load->view('under_construction');
	}
	public function clients(){
		$this->load->view('under_construction');
	}
	public function venues(){
		$this->load->view('under_construction');
	}
	public function expos(){
		$this->load->view('under_construction');
	}
	public function form(){
		 $this->load->library("form_validation");
		
		//validate form input
		$this->form_validation->set_rules('firstname', 'firstname', 'required|xss_clean');
		$this->form_validation->set_rules('surname', 'surname ', 'required|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		
		if ($this->form_validation->run() == true)
		{
			$data = array(
			'email'    		   => $this->input->post('email'),
			'firstname' 	   => $this->input->post('firstname'),
			'gender'           => $this->input->post('gender'),
			'surname'  		   => $this->input->post('surname'),
			'contactnumber'	   =>$this->input->post('phone'),
			'healthcondtions'  =>$this->input->post('health_condtions'),


	 		);
	 			 			
 		}
 
 	if ($this->form_validation->run() == true && $this->register_model->register($data))
		{ 
			//check to see if we are creating the user
			//redirect them to checkout page
			redirect('success');
		}
		 $this->load->view('form1');
}



	// public function register(){
	// 	$this->load->view('under_construction');
	// }
	function success()
	{
		$this->data['message'] = "<h1>User created successfully...</h1>";
		$this->load->view('success', $this->data);
	}
}