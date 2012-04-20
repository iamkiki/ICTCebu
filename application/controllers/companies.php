<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

	public function index()
	{
		$this->load->view('companies');
	}

    public function profile(){
            $this->load->view('company');
    }
}

/* End of file companies.php */
/* Location: ./application/controllers/companies.php */