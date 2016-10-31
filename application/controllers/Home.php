<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller {


	public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {

    	echo $this->templates->render('enterprise/index');
    }

}