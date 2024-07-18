<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		$data = array();
		$this->load->model('Mcrud');
		$this->load->library('session');
		$this->load->library('upload');
	}
	
	public function dashboard()
	{
		if(empty($this->session->userdata('username'))){
			redirect('adminpanel');
		}
			$data['count_member'] = $this->Mcrud->get_countmember();
			$data['count_menu'] = $this->Mcrud->get_countmenu();
			$data['count_order'] = $this->Mcrud->get_countorder();
			$data['count_detailorder'] = $this->Mcrud->get_countdetailorder();
		$this->template->load('layout_admin','admin/dashboard');
	}

	public function index() {
		$this->load->view('admin/form_login');
	}
	
}
?>