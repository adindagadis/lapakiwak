<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		// $this->template->load('static','login');
		$this->template->load('static','login');
  if (isset($_POST["btnSubmit"])){

  redirect('Home2');
  $this->template->load('static2','home');
  }
	}
}
