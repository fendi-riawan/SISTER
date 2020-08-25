<?php

/**
 * 
 */
class SekolahdasarModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_SekolahDasar()
	{
		$data = $this->db->get('SekolahDasar')->result();
		return $data;
	}
}