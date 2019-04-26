<?php

class C_syl extends CI_Controller{

	public function __construct() {
        parent::__construct();
				$this->load->model('M_post');
    }

	public function index(){
		$data['judul'] = 'Save Your Life';
		$this->load->view('landingpage', $data);
	}

	public function pertolongan(){
		$data['judul'] = 'Save Your Life';
		$this->load->view('pertolonganpage',$data);
	}

	public function heartcall(){
		$data['judul'] = 'Save Your Life';

		$this->load->view('heartcall',$data);
	}

	public function gabung(){
		$data['judul'] = 'Save Your Life';
		$this->load->view('gabung',$data);
	}

	public function forum(){
		$data['judul'] = 'Save Your Life';
		$data['tulis'] = $this->M_post->getAllPost();
		$this->load->view('forum',$data);
	}

	public function tenagaahli(){
		$data['judul'] = 'Save Your Life';
		$this->load->view('tenagaahli',$data);
	}

	public function postingan(){
		$this->M_post->tambahPostingan();
	}

}
