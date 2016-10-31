<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Base_Controller extends CI_Controller {

		public $templates;
	
		public function __construct()
		{
			parent::__construct();
			$this->templates = new League\Plates\Engine(APPPATH . "/views");
		}
	
	}
	
	/* End of file Base_Controller.php */
	/* Location: ./application/core/Base_Controller.php */