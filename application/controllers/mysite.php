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
	public function documents(){
		$this->load->view('documents');
	}

	public function events(){
		$this->load->view('events');
	}
	public function clients(){
		$this->load->view('clients');
	}
	public function venues(){
		$this->load->view('venues');
	}
	public function expos(){
		$this->load->view('expos');
	}
	public function notes(){
		$this->load->view('notes');
	}
 	
	
}