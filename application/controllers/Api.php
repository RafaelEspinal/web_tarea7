<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function index()
	{
		$this->load->helper('entidades');
		$this->load->view('insertar');
		
	}
	
	function consulta()
	{
		$this->load->view('api_resiviendo');
	}

	function dashboard(){
		$this->load->view('dashboard');
	}
	
}
