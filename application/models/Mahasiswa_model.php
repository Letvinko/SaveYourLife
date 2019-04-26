<?php
 // write your name and student id here
class Mahasiswa_model extends CI_model
{

	public function getAllMahasiswa()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('mahasiswa')->result_array();
	}

	public function tambahPost()
	{
		$data = [
			"judul" => $this->input->post('nama', true),
			"post" => $this->input->post('nim', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$sql = 'insert into mahasiswa values ('$data['nama']','$data['nim']','$data['email']','$data['jurusan']') ';
		$this->load->view($data,$sql);
	}

	public function hapusDataMahasiswa($id)
	{
		//use query builder to delete data based on id

	}

	public function getMahasiswaById($id)
	{
		//get data mahasiswa based on id
		$sql = 'select '$id' from mahasiswa';
		$this->load->view($sql);

	}

	public function ubahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];
		//use query builder class to update data mahasiswa based on id
	}

	public function cariDataMahasiswa()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"




		//return data mahasiswa that has been searched
	}
}
