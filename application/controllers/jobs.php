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
            'id'     =>     'content',
            'path'    =>    base_url().'scripts/ckeditor',

            //Optionnal values
            'config' => array(
                'toolbar'     =>     "Full",     //Using the Full toolbar
                'width'     =>     "500px",    //Setting a custom width
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

    public function view(){
        $this->load->view('job');
    }

    public function post(){
        if($this->session->userdata('auth')){
            $this->a_outer['a_js'][] = 'post';
            $this->load->helper('ckeditor',base_url() . 'scripts/ckeditor/');
            $this->ckeditor->basePath = base_url(). 'scripts/ckeditor/';
            $this->ckeditor->ToolbarSet = 'Full';
            $a_data['ckeditor'] = $this->data;
            
            $a_content = $this->m_contents->load( array('id' => $i_article_id, 'is_active' => 1) );
            
            $a_data['o_content'] = $a_content->row();
            
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