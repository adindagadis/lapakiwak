<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->template->load('static','home');
			
	  if (isset($_POST["btnSearch"])){

	  redirect('Ikan2');
	  $this->template->load('static','ikan2');
		}
}
}