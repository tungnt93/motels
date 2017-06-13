<?php
Class MY_Controller extends CI_Controller {
	
	public $data = array();
	function __construct() {

		parent::__construct();
		$ctrl = $this->uri->segment(1);
		
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		
		switch ($ctrl) {
			case 'admin' : {
				
			}
			
			default: {
				
			}
		}
	}
	private function _check_login()
    {

        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);
    
        $login = $this->session->userdata('login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if(!$login && $controller != 'login')
        {
        	//pre("abc");
            redirect(base_url('admin/login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if($login && $controller == 'login')
        {
        	//pre('abc');
            redirect(base_url('admin/report'));
        }
    }
 
}