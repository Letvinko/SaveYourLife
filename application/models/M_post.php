<?php
 // write your name and student id here
class M_post extends CI_model
{

	public function getAllPost()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('postingan')->result_array();
	}

	public function tambahPostingan()
	{
    $data = [
			"judul" => $this->input->post('judul', true),
			"post" => $this->input->post('posting', true),
		];


		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('postingan',$data);
	}
}
