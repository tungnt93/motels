<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index(){

		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout/layout', $this->data);
	}
}
