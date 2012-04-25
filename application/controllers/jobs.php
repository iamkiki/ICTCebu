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
            $this->a_outer['a_js'][] = 'post';
            $this->load->view('user');
        } else {
            header('Location: /');
        }
    }
    
    public function submit(){
        $this->b_ajax = true;
        $this->load->model('m_jobs');

        $a_user = $this->session->userdata('auth');
        $a_data = $_POST;
        $a_data['company_id'] = $a_user;
        $i_id = $this->m_jobs->create($a_data);
        
        if($i_id){
           echo json_encode(array('status' => 'success', 'id' => $i_id));
        } else {
           echo json_encode(array('status' => 'error'));
        }
    }

    public function edit($i_job_id){
    
    }
}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */