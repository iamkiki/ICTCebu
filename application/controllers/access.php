<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access extends CI_Controller {

    public function index()
    {
        $this->load->view('access');
    }

    public function login(){
        $this->b_ajax = true;
        $this->load->model('m_user');

        #check session, if exists, redirect to event
        if($this->session->userdata('auth')) {
                header('Location: /');
        }

        if(count($_POST) > 0)
        {
            try{
                $this->b_ajax = true;
                $s_email = $this->input->post('s_email',TRUE);
                $s_password = $this->input->post('s_password',TRUE);

                #match email and password, return error msg if not
                $r_result = $this->m_user->load( array( 'email' => $s_email, 'password' => do_hash($s_password) , 'status' => 1 ) );
                if(!$r_result) {
                        throw new Exception;
                }

                $a_user = $r_result->row();
                #create session
                $this->session->set_userdata('auth', $a_user);
                
                echo json_encode(array('status'=>'success'));
            } catch(Exception $e) {
                echo json_encode(array('status'=>'error', 'message'=>'Email address and password does not match.'));
            }
        }
    }

    public function resetpassword(){
        try{
            $this->b_ajax = true;
            $s_email = $this->input->post('s_email',TRUE);
            $this->load->model('m_user');

            $r_result = $this->m_user->load( array( 'email' => $s_email,'status'=>'1' ) );
            if(!$r_result)
                throw new Exception;

            $a_user = $r_result->row();

            $s_verification = do_hash($s_email.time());

            $this->m_user->update( $a_user->id, array('verification_key' => $s_verification ));

            $s_new_password = $this->_generatepassword($a_user->id);

            $a_data = array('s_email'=>$s_email,'s_name'=>$a_user->name, 's_password' => $s_new_password);
            $this->load->library('email');
            $this->email->from('info@ictcebu.com', 'ICTCebu.com');
            $this->email->to( sprintf('%s', $a_data['s_email']) );
            $this->email->mailtype = 'html';
            $this->email->subject( 'Reset Password' );
            $this->email->message(
                $this->load->view(
                    'emails/template'
                    , array(
                        's_contents' => $this->load->view(
                            'emails/registration/resetpassword', $a_data, TRUE
                        )
                    )
                    , TRUE
                )
            );
//            if (!$this->email->send())
//            {
//                show_error($this->email->print_debugger(),400);
//            }

            echo json_encode(array('status'=>'success'));
        }catch(Exception $e){
            echo json_encode(array('status'=>'error', 'message' => 'Email address is not registered.'));
        }
    }

    function _generatepassword($i_id) {
    	$this->b_ajax = true;
    	$this->load->model('m_user');

        $i_length = 9;
        $s_characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $s_string = '';
        for ($p = 0; $p < $i_length; $p++) {
            $s_string .= $s_characters[mt_rand(0, strlen($s_characters))];
        }

        $this->m_user->update( $i_id, array('password' => do_hash($s_string) ) );

        return $s_string;
    }

    public function logout(){
        $this->session->sess_destroy();
        header('Location: /');
    }

    public function register(){
        $this->b_ajax = true;
        if(count($_POST) > 0) {
            try{
                $this->b_ajax = true;
                $s_email = $this->input->post('email');
                $this->load->model('m_user');

                $r_result = $this->m_user->load( array( 'email' => $s_email) );
                if($r_result)
                    throw new Exception;

                $i_uid = $this->m_user->register($_POST);
                if($i_uid > 0) {
                    $s_verification_key = do_hash($s_email.time());
                    $a_fields = array(
                       'verification_key'  => $s_verification_key
                    );

                    $this->m_user->update($i_uid,$a_fields);

                    $this->_email_verification(
                        array(
                            's_email' => $s_email, 's_name' => ucwords($this->input->post('company_name')), 's_hash' => $s_verification_key, 'i_uid' => $i_uid
                        )
                    );
                    echo json_encode(array('status'=>'success'));
                }
            }catch(Exception $e){
                echo json_encode(array('status'=>'email'));
            }
        } else {
            echo json_encode(array('status'=>'error'));
        }
    }

    public function _email_verification( $a_data )
    {
        if ( !$a_data )
        {
            $a_data = array(
                    's_email' => 'info@ictcebu.com', 's_name' => 'ICTCebu', 's_hash' => 201009, 'i_uid' => 1
            );
        }
        $this->load->library('email');
        $this->email->from('info@ictcebu.com', 'ICTCebu.com');
        $this->email->to( sprintf('%s', $a_data['s_email']) );
        $this->email->mailtype = 'html';
        $this->email->subject( 'ICTCebu Email Verification' );
        $this->email->message(
            $this->load->view(
                    'emails/template'
                    , array(
                            's_contents' => $this->load->view(
                                    'emails/registration/verify', $a_data, TRUE
                            )
                    )
                    , TRUE
            )
        );
//        if (!$this->email->send())
//        {
//            show_error($this->email->print_debugger(),400);
//        }
    }

    public function verify( $s_id, $s_hash )
    {
        $this->load->model('m_user');
        $r_result = $this->m_user->load( array( 'id' => $s_id, 'verification_key' => $s_hash ) );
        if ( $r_result )
        {
            $this->m_user->is_verified = 1;
            $this->m_user->verification_key = '';
            $this->m_user->update();

            $a_result = $r_result->row();
            $this->session->set_userdata('a_user', $a_result);

            $this->load->view('verification-success');
        } else {
                header('location: /');
        }
    }

}

/* End of file access.php */
/* Location: ./application/controllers/access.php */