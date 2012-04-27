<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {

    public function index()
    {
        $this->load->view('companies');
    }

    public function profile(){
    	if($this->session->userdata('auth')){
            $this->load->model('m_companies');
            $this->load->model('m_jobs');
            $a_user = $this->session->userdata('auth');
            $a_data = $this->m_companies->load( array('id' => $a_user->id, 'status' => 1) );
            if($a_data->num_rows > 0){
                $this->load->view('company', array('a_user' => $a_data->row()));
            }
        } else {
            header('Location: /');
        }
    }

    public function update(){
        $this->b_ajax = true;
        $this->load->model('m_companies');

        $i_id = $_POST['id'];
        $a_data = $_POST;
		
        unset($a_data['id']);
        unset($a_data['password']);
        if(isset($_POST['password']) && $_POST['password'] != ''){
            $a_data['password'] = do_hash($_POST['password']);
        } 

        $this->m_companies->update($i_id, $a_data);
        
        echo json_encode(array('status' => 'success'));
    }

    public function upload($i_id){
        $this->b_ajax = true;
        $this->load->library('uploader');
        $this->load->model('m_companies');
		
        $s_file = $_FILES['logo']['name'];

        $j_return = $this->uploader->upload($s_file);
        $o_return = json_decode($j_return);
        
        $o_return->thumbpath = $this->_createthumbnail( $o_return->filepath );
        $j_return = json_encode( $o_return );

        if ( $o_return->success == true)
        {
            $this->m_companies->update($i_id, array('logo' => $o_return->filename));
        }
		
        header('Location: /logo');
    }

    function _createthumbnail($s_file) {
        $this->load->library('image_lib');

        //get file information
        $a_pathinfo = pathinfo( $s_file );
        //generate the thumbnail path
        $s_thumb = '/uploads/'.$a_pathinfo['filename'].'-thumb.'.$a_pathinfo['extension'];

        $config['image_library'] = 'gd2';
        $config['source_image'] = $_SERVER["DOCUMENT_ROOT"].'/'.$s_file;
        $config['new_image'] = $_SERVER["DOCUMENT_ROOT"].'/uploads/'.$a_pathinfo['filename'].'-profile.'.$a_pathinfo['extension'];
        $config['create_thumb'] = FALSE; //set this to false, we create the thumbnail, not codeigniter
        $config['maintain_ratio'] = TRUE;

        $config['width'] = 260;
        $config['height'] = 180;
        $config['x_axis'] = 0;
        $config['y_axis'] = 0;
        if ( file_exists($config['source_image']) && !is_dir($config['source_image']) )
		{
                    if (!file_exists($config['new_image']))
                    {
		        switch ( strtolower($a_pathinfo['extension']) )
		        {
		        	case 'jpeg':
		        	case 'jpg':
		        		$o_img = imagecreatefromjpeg( $config['source_image'] );
		        		break;
		        	case 'gif':
		        		$o_img = imagecreatefromgif( $config['source_image'] );
		        		break;
		        	case 'png':
		        		$o_img = imagecreatefrompng( $config['source_image'] );
		        		break;
		        }
                        
		        $i_width = imagesx( $o_img );
		        $i_height = imagesy( $o_img );
		        $s_type = '';
		        $i_thumb_size = 260;

		        if ( $i_width > $i_height )
		        {
		        	$s_type = 'wide';
		        	$config['height'] = intval(($i_height / $i_width) * $i_thumb_size);
		        	$config['width'] = $i_thumb_size;
		        }
		        elseif ( $i_height > $i_width )
		        {
		        	$s_type = 'tall';
		        	$config['width'] = intval(($i_width / $i_height) * $i_thumb_size);
		        	$config['height'] = $i_thumb_size;
		        }
		        else
		        {
		        	$config['width'] = $i_thumb_size;
		        	$config['height'] = $i_thumb_size;
		        	$s_type = 'square';
		        }
		        if ( $i_width < 260 && $i_height < 180 )
		        {
                                $config['width'] = $i_width;
                                $config['height'] = $i_height;
                        }
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();

				/***/
		        $i_thumb_size = 160;
		        $config['new_image'] = $_SERVER["DOCUMENT_ROOT"].'/'.$s_thumb;
		        if ( $i_width > $i_height )
		        {
		        	$s_type = 'wide';
		        	$config['height'] = intval(($i_height / $i_width) * $i_thumb_size);
		        	$config['width'] = $i_thumb_size;
		        }
		        elseif ( $i_height > $i_width )
		        {
		        	$s_type = 'tall';
		        	$config['width'] = intval(($i_width / $i_height) * $i_thumb_size);
		        	$config['height'] = $i_thumb_size;
		        }
		        else
		        {
		        	$config['width'] = $i_thumb_size;
		        	$config['height'] = $i_thumb_size;
		        	$s_type = 'square';
		        }
                        
                        $this->image_lib->initialize($config);
                        $this->image_lib->resize();

				/***/

		        $config['maintain_ratio'] = TRUE;
                        $config['source_image'] = $config['new_image'];

                        if ( $s_type == 'wide' )
                        {
                                $config['x_axis'] = ($config['width'] - $i_thumb_size) / 2;
                                $config['y_axis'] = 0;
                        }
                        elseif ( $s_type == 'tall' )
                        {
                                $config['x_axis'] = 0;
                                $config['y_axis'] = ($config['height'] - $i_thumb_size) / 2;
                        }
                        $this->load->library('image_lib', $config);
		        $this->image_lib->initialize($config);
		        if ( ! $this->image_lib->crop())
		        {
		            echo $this->image_lib->display_errors('<p>', '</p>');
		        }
                    }
	        return $s_thumb;
        }
        else return '';
   }
}

/* End of file companies.php */
/* Location: ./application/controllers/companies.php */