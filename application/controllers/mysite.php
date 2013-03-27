<?
defined('BASEPATH') OR exit('No direct script access allowed');

class MySite extends CI_Controller {

	public function index(){
		$this->load->view('login');

	}
	public function quotes(){
			
		 $this->load->view('quotes_view');
		
	}
}