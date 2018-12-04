<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spinner extends CI_Controller {

	
	public function index()
	{
		$this->template->load('static2','spinner');
	}
}
