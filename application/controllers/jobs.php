<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function index()
	{
        $this->load->view('jobs');
	}

    public function view(){
        $this->load->view('job');
    }

    public function post(){
        if($this->session->userdata('auth')){
            $this->load->view('user');
        } else {
            header('Location: /');
        }
    }
}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */