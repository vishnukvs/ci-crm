<?
defined('BASEPATH') OR exit('No direct script access allowed');

class MySite extends CI_Controller {

	public function index(){
		$this->load->view('login');

	}
	public function quotes(){
		// echo ' in the quotes methd';
		
		 $this->load->view('quotes_view');
		
	}
}