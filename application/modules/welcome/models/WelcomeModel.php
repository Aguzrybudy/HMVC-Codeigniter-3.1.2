<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WelcomeModel extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	
	}

	function hello()
	{
		$data = "tidak ada";
		return $data;
	}

}

/* End of file WelcomeModel.php */
/* Location: ./application/models/WelcomeModel.php */