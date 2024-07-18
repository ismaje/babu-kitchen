<?php

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->library("session");
	}

	public function index(){
		$data['user']=$this->Mcrud->get_all_data('user')->result();
		$this->template->load('layout_admin','admin/member/index', $data);
	}

	public function aktif($id){
		$dataUpdate=array('statusAktif'=>'Y');
		$this->Mcrud->update('user',$dataUpdate,'id_user',$id);
		redirect('user');
	}

	public function non_aktif($id){
		$dataUpdate=array('statusAktif'=>'N');
		$this->Mcrud->update('user',$dataUpdate,'id_user',$id);
		redirect('user');
	}

	public function delete($id){
		$dataDelete=array('id_user'=>$id);
		$this->Mcrud->delete($dataDelete,'user');
		$this->session->set_flashdata('success', 'menu berhasil dihapus');
		$this->session->set_flashdata('error', 'menu gagal dihapus');
		redirect('member');
	}
}