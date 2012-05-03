<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url'); //You should autoload this one ;)
        $this->load->helper('ckeditor');
		
        //Ckeditor's configuration
        $this->data['ckeditor'] = array(

            //ID of the textarea that will be replaced
            'id'     =>     'description',
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
        if($this->session->userdata('auth')){
            $this->load->model('m_companies');
            //$this->load->model('m_jobs');
            $a_user = $this->session->userdata('auth');
            $a_data = $this->m_companies->load( array('id' => $a_user['id'], 'status' => 1) );
            if($a_data->num_rows > 0){
                $this->load->view('user', array('a_user' => $a_data->row()));
            }
        } else {
            $this->load->view('home');
        }
    }

    public function editprofile(){
        if($this->session->userdata('auth')){
            $this->a_outer['a_js'][] = 'editprofile';
            $this->load->model('m_companies');
            $a_user = $this->session->userdata('auth');
            $a_company = $this->m_companies->load( array('id' => $a_user['id'], 'status' => 1) );
            
            $this->load->helper('ckeditor', base_url() . 'js/ckeditor/');
            $this->ckeditor->basePath = base_url(). 'js/ckeditor/';
            $this->ckeditor->ToolbarSet = 'Full';
            $a_data['ckeditor'] = $this->data;          
            
            if($a_company->num_rows > 0){
            	$a_data['info'] = $a_company->row();
            	//$a_data['content'] = $a_data['info']->description; 
                $this->load->view('user', array('a_data' => $a_data));
            }
        } else {
            $this->load->view('home');
        }
    }

    public function logo(){
        $a_user = $this->session->userdata('auth');
        $this->load->model('m_companies');
        $a_data = $this->m_companies->load( array('id' => $a_user['id'], 'status' => 1) );
        $this->a_outer['a_js'][] = 'account';
        $this->load->view('user', array('a_user' => $a_data->row()));
    }

    public function account(){
        if($this->session->userdata('auth')){
            $this->a_outer['a_js'][] = 'account';
            $this->load->model('m_companies');
            $a_user = $this->session->userdata('auth');
            $a_data = $this->m_companies->load( array('id' => $a_user['id'], 'status' => 1) );
            if($a_data->num_rows > 0){
                $this->load->view('user', array('a_data' => $a_data->row()));
            }
        } else {
            $this->load->view('home');
        }
    }

    public function listings(){
        $this->load->view('user');
    }

    public function about(){
        $this->load->view('about');
    }

    public function contact(){
        $this->load->view('contact');
    }

    public function sendcontact(){
        $this->b_ajax = true;
        $s_name = $this->input->post('s_name',TRUE);
        $s_email = $this->input->post('s_email',TRUE);
        $s_message = $this->input->post('s_message');

        $a_data = array('s_email'=>$s_email,'s_name'=>$s_name, 's_message'=>$s_message);
        $this->load->library('email');
        $this->email->from( sprintf('%s', $a_data['s_email']), 'ICTCebu.com' );
        $this->email->to('info@ictcebu.com');
        $this->email->mailtype = 'html';
        $this->email->subject( 'Contact Form' );
        $this->email->message(
            $this->load->view(
                'emails/template'
                , array(
                    's_contents' => $this->load->view(
                        'emails/contact', $a_data, TRUE
                    )
                )
                , TRUE
            )
        );
        if (!$this->email->send())
        {
            show_error($this->email->print_debugger(),400);
        }
        echo json_encode(array('status'=>'success'));
    }
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */