<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        if($this->session->userdata('auth')){
            $this->load->model('m_companies');
            $this->load->model('m_jobs');
            $a_user = $this->session->userdata('auth');
            $a_data = $this->m_companies->load( array('id' => $a_user->id, 'status' => 1) );
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
            $a_data = $this->m_companies->load( array('id' => $a_user->id, 'status' => 1) );
            if($a_data->num_rows > 0){
                $this->load->view('user', array('a_data' => $a_data->row()));
            }
        } else {
            $this->load->view('home');
        }
    }

    public function logo(){
        $a_user = $this->session->userdata('auth');
        $this->load->model('m_companies');
        $a_data = $this->m_companies->load( array('id' => $a_user->id, 'status' => 1) );
        $this->a_outer['a_js'][] = 'account';
        $this->load->view('user', array('a_user' => $a_data->row()));
    }

    public function account(){
        if($this->session->userdata('auth')){
            $this->a_outer['a_js'][] = 'account';
            $this->load->model('m_companies');
            $a_user = $this->session->userdata('auth');
            $a_data = $this->m_companies->load( array('id' => $a_user->id, 'status' => 1) );
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