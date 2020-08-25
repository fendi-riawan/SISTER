<?php

/**
 * 
 */
class SekolahdasarController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('SekolahdasarModel');
	}

	public function response($data)
	{
		$this->output 
					->set_content_type('application/json') // Content Type ini sebenernya udah ada di library CI, jadi kalau content type nya gak sesuai, hasilnya lain
					->set_output(json_encode($data))
					->_display();
		exit;			
	}

	public function get_SekolahDasar()
	{
		$data = $this->SekolahdasarModel->get_SekolahDasar();

		return $this->response([
			"error"		=> false,
			"message"	=> "Data tersedia..",
			"SekolahDasar"	=> $data
		]);
	}
}
