<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();

        $this->load->helper('url'); //You should autoload this one ;)
        $this->load->helper('ckeditor');
		
        //Ckeditor's configuration
        $this->data['ckeditor'] = array(

            //ID of the textarea that will be replaced
            'id'     =>     'requirements',
            'path'    =>    base_url().'js/ckeditor',

            //Optionnal values
            'config' => array(
                'toolbar'     =>     "Full",     //Using the Full toolbar
                'width'     =>     "600px",    //Setting a custom width
                'height'     =>     '300px',    //Setting a custom height

            ),

            //Replacing styles from the "Styles tool"
            'styles' => array(

                //Creating a new style named "style 1"
                'style 1' => array (
                    'name'         =>     'Blue Title',
                    'element'     =>     'h2',
                    'styles' => array(
                        'color'             =>     'Blue',
                        'font-weight'         =>     'bold'
                    )
                ),

                //Creating a new style named "style 2"
                'style 2' => array (
                    'name'         =>     'Red Title',
                    'element'     =>     'h2',
                    'styles' => array(
                        'color'             =>     'Red',
                        'font-weight'         =>     'bold',
                        'text-decoration'    =>     'underline'
                    )
                )                
            )
        );

    }
    
    public function index()
    {
        $this->load->view('jobs');
    }

    public function view($i_id){
        $this->load->model('m_jobs');
        $this->load->model('m_companies');
        $a_job = $this->m_jobs->load( array('id' => $i_id) );
        if($a_job->num_rows > 0){
            $a_company = $this->m_companies->load( array('id' => $a_job->row()->company_id) );
            $a_data = array(
                'o_job'     => $a_job->row(),
                'o_company' => $a_company->row()
            );
            $this->load->view('job', $a_data);
        } else {
            header('Location: /jobs');
        }
    }

    public function post(){
        if($this->session->userdata('auth')){
            $this->a_outer['a_js'][] = 'post';
            $this->load->helper('ckeditor', base_url() . 'js/ckeditor/');
            $this->ckeditor->basePath = base_url(). 'js/ckeditor/';
            $this->ckeditor->ToolbarSet = 'Full';
            $a_data['ckeditor'] = $this->data;
            
            $this->load->view('user', array('a_data' => $a_data));
        } else {
            header('Location: /');
        }
    }
    
    public function submit(){
        $this->b_ajax = true;
        $this->load->model('m_jobs');
		
        $a_user = $this->session->userdata('auth');
        $a_data = $_POST;
        $a_data['requirements'] = $this->input->post('requirements', TRUE);
        $a_data['company_id'] = $a_user['id'];
        $a_data['cost'] = 1400*$_POST['expiry'];
        $a_data['expiry'] = date('Y-m-d h:i:s', strtotime("+30 days", time()));
        
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