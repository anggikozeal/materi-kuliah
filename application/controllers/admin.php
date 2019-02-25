 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __Construct()
    {
        parent::__Construct();
    }
    
    public function index()
	{
		$this->load->view('admin/v_login');
    }
    
    public function home()
	{
		$this->load->view('admin/v_home');
	}
}
