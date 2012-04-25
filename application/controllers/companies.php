<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

    public function index()
    {
        $this->load->view('companies');
    }

    public function profile(){
        $this->load->view('company');
    }

    public function update(){
        $this->b_ajax = true;
        $this->load->model('m_companies');

        $i_id = $_POST['id'];
        $a_data = $_POST;

        unset($a_data['id']);
        unset($a_data['password']);
        if(isset($_POST['password'])){
            $a_data['password'] = do_hash($_POST['password']);
        }

        $this->m_companies->update($i_id, $a_data);
        
        echo json_encode(array('status' => 'success'));
    }

    public function logo(){
        $this->b_ajax = true;
        var_dump($_FILES);
        exit();
    }
}

/* End of file companies.php */
/* Location: ./application/controllers/companies.php */