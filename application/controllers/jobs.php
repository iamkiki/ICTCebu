<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function index()
	{
		$this->load->view('jobs');
	}

        public function view(){
                $this->load->view('job');
        }
}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */