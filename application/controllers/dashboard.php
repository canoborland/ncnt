<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	/**
	 Controlador del Dashboard
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->view('dashboard');
	}
}
