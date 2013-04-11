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
	public function dashboard(){
		$this->load->view('dashboard');
	}
	public function addnewuser(){
		$this->load->view('addnewuser');
	}
	public function todo(){
		$this->load->view('todo');
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
	
 	// public function register(){
	// 	$this->load->view('under_construction');
	// }
	function success()
	{
		$this->data['message'] = "<h1>User created successfully...</h1>";
		$this->load->view('success', $this->data);
	}
}