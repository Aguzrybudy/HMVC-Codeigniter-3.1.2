<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

APPPATH.'third_party/MX/Controller.php';

class Welcome extends MX_Controller  {

    public $autoload = array(
        'helper'    => array('url', 'form'),
        'libraries' => array('email','database'),
        'model'=>array('welcomemodel'),
    );

    public function __construct()
    {
    	parent::__construct();
    }


	public function index()
	{
        //echo $this->welcomemodel->hello();
        $this->load->view('welcome');
	}

    function layout()
    {
        $page_data['page_name'] = "page";
        $this->load->view('index.php',$page_data);
    }

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */