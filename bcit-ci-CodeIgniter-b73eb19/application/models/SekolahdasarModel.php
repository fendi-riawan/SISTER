<?php

/**
 * 
 */
class SekolahdasarModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database(); // ini wajib ada klo udah berhubungan sama database, sejak versi CI 3.1.10!
	}

	public function get_SekolahDasar()
	{
		$data = $this->db->get('SekolahDasar')->result();
		return $data;
	}
}
