<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Uploader {
	public $i_id;
	public static $i_scale_units = 50;
	public static $i_pad_units = 10;
	public $s_target_dir = 'uploads';
	public $s_target_path = '';
	public $s_upload_dir = 'uploads';
	
	
	public function __construct($props = array())
	{
		if (count($props) > 0)
		{
			$this->initialize($props);
		}

		log_message('debug', "Upload Class Initialized");
	}
	
	/**
	 * Initialize preferences
	 *
	 * @param	array
	 * @return	void
	 */
	public function initialize($config = array())
	{
	}
	
	public function prep_target_dir( $s_fullpath, $s_relpath )
	{
		$this->s_target_dir = realpath($s_fullpath) ? realpath($s_fullpath) : $s_fullpath;
		$this->s_target_dir = rtrim($this->s_target_dir,'/');

		$this->s_target_path = rtrim($s_relpath,'/');
		if (!file_exists( $this->s_target_dir ) && $this->s_target_dir )
		{
			mkdir( $this->s_target_dir ,0777, true);
		}
	}
	/**
	 * do_thumbnail_final
	 * 
	 * Creates the 1:1 ratioed thumbnail (square)
	 */
	public function do_thumbnail_final( $s_thumb_templatename, $i_x, $i_y, $s_dir = '' ) {
		
		$s_thumb_templatepath = $this->s_target_dir.'/'.ltrim($s_dir,'/').$s_thumb_templatename;
		
		
		$a_fileinfo = pathinfo( $s_thumb_templatepath );
		
		
		
		$s_gen_name = $a_fileinfo['basename'];
		//$s_gen_name = ltrim($a_fileinfo['filename'], 'thumb_tpl_');
		$s_gen_name = str_replace('thumb_tpl_', '', $a_fileinfo['filename']);
		
		$s_gen_name = sprintf('thumb_%s.%s', $s_gen_name, $a_fileinfo['extension']);
		$s_gen_path = $a_fileinfo['dirname'].'/'.$s_gen_name;
		list($s_type, $s_image_create_func, $s_image_save_func, $s_new_image_ext) = $this->_get_type_info( $s_thumb_templatepath );
		
		$fh_image = $this->_do_crop( $s_image_create_func, $s_thumb_templatepath, $i_x, $i_y );
		
		if ( $s_image_save_func == 'ImageJPEG' )
		$process = $s_image_save_func($fh_image, $s_gen_path, 100);
		else
		$process = $s_image_save_func($fh_image, $s_gen_path);
		
		return $s_gen_path;
	}
	
	public function do_thumbnail( $s_filepath, $i_min_units )
	{
		$this->i_scale_units = $i_min_units;
		$a_result = array(
		
		);
		
		if ( !file_exists($s_filepath) )
		{
			return $a_result;
		}
		$a_image_info = getimagesize($s_filepath);
		$i_width_origin = $i_width = $a_image_info[0];
		$i_height_origin = $i_height = $a_image_info[1];
		
		list($s_type, $s_image_create_func, $s_image_save_func, $s_new_image_ext) = $this->_get_type_info( $s_filepath );
		list( $a_result['i_init_left'], $a_result['i_init_top'], $i_width, $i_height ) = $this->_do_scale($i_width, $i_height);
		
		$fh_image = $this->_do_resample( $s_image_create_func, $s_filepath, $i_height, $i_width, $i_width_origin, $i_height_origin );

		
		$a_thumb = pathinfo($s_filepath);
		$a_result['s_thumbnail'] = $s_thumbname = $a_thumb['filename'] . '-'.$i_min_units.'x'.$i_min_units.'.'. $s_new_image_ext;
		
		$s_thumbpath = $a_thumb['dirname'].'/'.$s_thumbname;
		
		if (file_exists($s_thumbpath)) {
			unlink($s_thumbpath);
		}
		

		if (!file_exists($s_thumbpath)) {
			
			if ( $s_image_save_func == 'ImageJPEG' )
			$process = $s_image_save_func($fh_image, $s_thumbpath, 100);
			else
			$process = $s_image_save_func($fh_image, $s_thumbpath);
			
		}
		$s_thumbpath = $this->do_thumbnail_final( $s_thumbname, $a_result['i_init_left'], $a_result['i_init_top'] );
		$a_thumb = pathinfo($s_thumbpath);
		$s_thumbpath = $this->s_upload_dir . '/' . $a_thumb['basename'];
		return $s_thumbpath;
	}
	
	/**
	 * do_thumbnail_template
	 * 
	 * Create a thumbnail without cropping as the template for the thumbnail maker
	 */
	public function do_thumbnail_template( $s_filename, $i_min_units = 50, $i_pad_units = 10, $s_dir = '' ) {
		$this->i_scale_units = $i_min_units;
		$this->i_pad_units = $i_pad_units;
		$a_result = array(
		
		);
		$s_dir_path = $this->s_target_dir.'/'.ltrim($s_dir,'/');
		
		$s_filepath = $s_dir_path.$s_filename;
		if ( !file_exists($s_filepath) )
		{
			return $a_result;
		}
		
		$a_image_info = getimagesize($s_filepath);
		$i_width_origin = $i_width = $a_image_info[0];
		$i_height_origin = $i_height = $a_image_info[1];
		
		list($s_type, $s_image_create_func, $s_image_save_func, $s_new_image_ext) = $this->_get_type_info( $s_filepath );
		list( $a_result['i_init_left'], $a_result['i_init_top'], $i_width, $i_height ) = $this->_do_scale($i_width, $i_height);
		
		
		$fh_image = $this->_do_resample( $s_image_create_func, $s_filepath, $i_height, $i_width, $i_width_origin, $i_height_origin );

		
		$a_thumb = pathinfo($s_filepath);
		$a_result['s_thumbnail'] = $s_thumbname = 'thumb_tpl_'.$a_thumb['filename'] . '.'. $s_new_image_ext;
		#$a_result['s_thumbnail'] = $s_thumbname = 'thumb_'. time() . '-tpl.'. $s_new_image_ext;
		$s_thumbpath = $s_dir_path.$s_thumbname;
		
		if (file_exists($s_thumbpath)) {
			unlink($s_thumbpath);
		}

		if (!file_exists($s_thumbpath)) {
			
			if ( $s_image_save_func == 'ImageJPEG' )
			$process = $s_image_save_func($fh_image, $s_thumbpath, 100);
			else
			$process = $s_image_save_func($fh_image, $s_thumbpath);
			
		}

		$a_result['s_thumbnail_url'] = $this->s_target_path.'/'.$s_thumbname;
		$a_result['s_file_url'] = $this->s_target_path.'/'.$s_filepath;

		$a_result['s_40x40_url'] = '/'.$this->do_thumbnail_final($s_thumbname, $a_result['i_init_left'], $a_result['i_init_top'], $s_dir );
		return $a_result;
	}
	
	/**
	 * do_scale
	 * 
	 * Create a thumbnail without cropping as the template for the thumbnail maker
	 */
	public function do_scale( $s_relpath, $i_pixels, $s_suffix ) {
		$this->i_scale_units = $i_pixels;
		$a_result = array(
		
		);
		
		$s_filepath = rtrim($this->s_target_dir,'/') .'/'. ltrim($s_relpath,'/');
//echo $s_filepath;
		if (!file_exists($s_filepath)) return $a_result;
		
		$a_image_info = getimagesize($s_filepath);
		$i_width_origin = $i_width = $a_image_info[0];
		$i_height_origin = $i_height = $a_image_info[1];
		
		list($s_type, $s_image_create_func, $s_image_save_func, $s_new_image_ext) = $this->_get_type_info( $s_filepath );
		list( $a_result['i_init_left'], $a_result['i_init_top'], $i_width, $i_height ) = $this->_do_scale($i_width, $i_height);
		
		$fh_image = $this->_do_resample( $s_image_create_func, $s_filepath, $i_height, $i_width, $i_width_origin, $i_height_origin );

		
		$a_pathinfo = pathinfo($s_filepath);
		$a_result['s_thumbnail'] = $s_thumbname = $a_pathinfo['filename'] . $s_suffix . '.'. $s_new_image_ext;
		$s_thumbpath = $a_pathinfo['dirname'] .'/'. $s_thumbname;
		if (file_exists($s_thumbpath)) {
			unlink($s_thumbpath);
		}

		if (!file_exists($s_thumbpath)) {
			
			if ( $s_image_save_func == 'ImageJPEG' )
			$process = $s_image_save_func($fh_image, $s_thumbpath, 100);
			else
			$process = $s_image_save_func($fh_image, $s_thumbpath);
			
		}
		
		//return a preview of the file http://server_name/path/to/file.ext
		return base_url(). trim($this->s_target_path.'/'.$s_thumbname,'/');
	}
	
	/**
	 * _do_scale
	 * 
	 * Scales down image to the right size	
	 */
	private function _do_scale($i_width, $i_height) {
		$a_result = array();
		
		if ( $i_height > $i_width) {
			$i_factor = ((float) $this->i_scale_units + $this->i_pad_units) / (float) $i_width;
			$i_height = $i_factor * $i_height;
			$i_width = $this->i_scale_units + $this->i_pad_units;
			$a_result[0] = -1 * $this->i_pad_units / 2;
			$a_result[1] = ($i_height - $this->i_scale_units) / 2 * -1;
		} else {
			$i_factor = ((float) $this->i_scale_units + $this->i_pad_units) / (float) $i_height;
			$i_width = $i_factor * $i_width;
			$i_height = $this->i_scale_units + $this->i_pad_units;
			$a_result[0] = ($i_width - $this->i_scale_units) / 2 * -1;
			$a_result[1] = -1 * $this->i_pad_units / 2;
		}
		$a_result[2] = $i_width;
		$a_result[3] = $i_height;

		return $a_result;
	}

	/**
	 * _png_background
	 * 
	 * Make IMG background transparent after resize
	 */
	private function _png_background($fh_dst_image, $i_width , $i_height)
	{
		imagealphablending($fh_dst_image, false);
		imagesavealpha($fh_dst_image,true);
		$transparent = imagecolorallocatealpha($fh_dst_image, 255, 255, 255, 127);
		imagefilledrectangle($fh_dst_image, 0, 0, $i_width, $i_height, $transparent);
	}	
	
	/**
	 * _do_scale
	 * 
	 * Scales down image to the right size	
	 */
	private function _do_resample( $s_image_create_func, $s_filepath, $i_height, $i_width, $i_width_origin, $i_height_origin ) 
	{
	
		$fh_dst_image = ImageCreateTrueColor( $i_width , $i_height );
		
		if($s_image_create_func == 'ImageCreateFromPNG')
		{
			$this->_png_background($fh_dst_image, $i_width , $i_height);
		}
		
		$fh_src_image = $s_image_create_func( $s_filepath );
		ImageCopyResampled($fh_dst_image, $fh_src_image, 0, 0, 0, 0, $i_width, $i_height, $i_width_origin, $i_height_origin);
		
		return $fh_dst_image;
	}

	/**
	 * _do_crop
	 * 
	 * crops image to perfect square shape	
	 */
	private function _do_crop( $s_image_create_func, $s_filepath, $i_x, $i_y ) {
		$a_image_info = getimagesize($s_filepath);
		$fh_dst_image = ImageCreateTrueColor( $this->i_scale_units , $this->i_scale_units );
		if($s_image_create_func == 'ImageCreateFromPNG')
		{
			$this->_png_background($fh_dst_image, $this->i_scale_units , $this->i_scale_units);
		}
		
		$fh_src_image = $s_image_create_func( $s_filepath );
		imagecopy($fh_dst_image, $fh_src_image, 0, 0, $i_x*-1, $i_y*-1, $this->i_scale_units, $this->i_scale_units);
		return $fh_dst_image;
	}
	
	/**
	 * _get_type_info
	 * 
	 * get image type and information	
	 */
	private function _get_type_info( $s_filepath ) {
		$a_image_info = getimagesize($s_filepath);
		$a_file_info = pathinfo($s_filepath);
		$s_mime = $a_image_info['mime'];
		$s_type = substr(strrchr($s_mime, '/'), 1);

		switch($s_type) {
			case 'jpeg':
			    $s_image_create_func = 'ImageCreateFromJPEG';
			    $s_image_save_func = 'ImageJPEG';
			    break;
			
			case 'png':
			    $s_image_create_func = 'ImageCreateFromPNG';
			    $s_image_save_func = 'ImagePNG';
			    break;
			
			case 'gif':
			    $s_image_create_func = 'ImageCreateFromGIF';
			    $s_image_save_func = 'ImageGIF';
			    break;

		}
		$s_new_image_ext = strtolower($a_file_info['extension']);
		
		return array( $s_type, $s_image_create_func, $s_image_save_func, $s_new_image_ext );
	}  
    
    /**
	 * upload
	 *
	 * @scope public
	 * @param string filename
	 * @description uploads file submitted
	 */
	public function upload( $s_name, $i_preserve = 0 ) {
		if ($s_name) {
			$s_target_dirpath = realpath(rtrim($this->s_target_dir,'/'));
			if (!file_exists($s_target_dirpath)) mkdir($s_target_dirpath, 0777, TRUE);	

			// list of valid extensions, ex. array("jpeg", "xml", "bmp")
			$a_allowed_exts = array();
			
			// max file size in bytes
			$i_size_limit = 10 * 1024 * 1024;
			$a_segments = pathinfo($s_name);
			if ( !$i_preserve )
			$s_orig_filename = uniqid() . '.' . $a_segments['extension'];
			else
			{
				$s_orig_filename = $a_segments['basename'];
				$i_inc = 1;
				$b_fileexists = file_exists( $s_target_dirpath .'/'. $s_orig_filename );
				while( $b_fileexists )
				{
					$s_orig_filename = $a_segments['filename'] . "-$i_inc" . '.' . $a_segments['extension'];
					$b_fileexists = file_exists( $s_target_dirpath .'/'. $s_orig_filename );
					if ( $b_fileexists )
					{
						$i_inc++;
					}
				}
			}
			$s_target_filepath = $this->s_target_dir . '/' . $s_orig_filename;
			
			/*
			unset($this->c_user->a_pdata->icon_offset);
			$this->c_user->update();
			*/
			
			if (file_exists($s_target_filepath) && !$i_preserve) {
				unlink($s_target_filepath);
			}
			$pathinfo = pathinfo($s_target_filepath);
			if (file_exists($s_target_dirpath . '/thumb_'.$pathinfo['filename'].'.'.$pathinfo['extension']) && !$i_preserve) {
				unlink($s_target_dirpath . '/thumb_'.$pathinfo['filename'].'.'.$pathinfo['extension']);
			}
			if (file_exists($s_target_dirpath . '/thumb_'.$pathinfo['filename'].'-tpl.'.$pathinfo['extension']) && !$i_preserve) {
				unlink($s_target_dirpath . '/thumb_'.$pathinfo['filename'].'-tpl.'.$pathinfo['extension']);
			}
			$uploader = new qqfileuploader($a_allowed_exts, $i_size_limit, $pathinfo['filename'].'.'.$pathinfo['extension']);
			$result = $uploader->handleUpload($s_target_dirpath, $pathinfo['filename'].'.'.$pathinfo['extension']);

			if ($result['success']) {
				/*
				$this->c_user->a_data['profilePic'] = basename($result['filename']);
				$this->c_user->update();
				*/
				$a_return = array(
					'success'=>'true', 
					'filepath'=>trim($s_target_filepath,'./'),
					'filename'=>$result['filename'],
					'thumbnail'=>$s_target_filepath,
                    'user_id'=>isset($_GET['user_id']) ? $_GET['user_id'] : ''
				);
				$a_return['filepath'] = substr( $a_return['filepath'] , strpos( $a_return['filepath'], $this->s_upload_dir ));
				$a_return['filepath'] = trim($a_return['filepath'],'./');
				$a_return['thumbnail'] = substr( $a_return['thumbnail'] , strpos( $a_return['thumbnail'], $this->s_upload_dir ));
				$a_return['thumbnail'] = trim($a_return['thumbnail'],'./');
				return( json_encode(
					array_merge($a_return, $result)
				));
			} else {
				return (
					json_encode(
						$result
					)
				);
			}
			// to pass data through iframe you will need to encode all html tags
			
		}
		
		
		
	}
}

/**
 * Handle file uploads via XMLHttpRequest
 */
class qqUploadedFileXhr {
	var $filename;
	function __construct($filename = '') {
		if ($filename)
		{
			$this->filename = $filename;
		}
		else
		{
			$this->filename = $_GET['logo'];
		}
	}
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    function save($path) {
        $input = fopen("php://input", "r");
        $temp = tmpfile();
        $realSize = stream_copy_to_stream($input, $temp);
        fclose($input);
        
        if ($realSize != $this->getSize()){            
            return false;
        }
        
        $target = fopen($path, "w");        
        fseek($temp, 0, SEEK_SET);
        stream_copy_to_stream($temp, $target);
        fclose($target);
        
        return true;
    }
    function getName() {
        return $this->filename;
    }
    function getSize() {
        if (isset($_SERVER["CONTENT_LENGTH"])){
            return (int)$_SERVER["CONTENT_LENGTH"];            
        } else {
            throw new Exception('Getting content length is not supported.');
        }      
    }   
}

/**
 * Handle file uploads via regular form post (uses the $_FILES array)
 */
class qqUploadedFileForm {  
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    function save($path) {
        if(!move_uploaded_file($_FILES['logo']['tmp_name'], $path)){
            return false;
        }
        return true;
    }
    function getName() {
        return $_FILES['logo']['name'];
    }
    function getSize() {
        return $_FILES['logo']['size'];
    }
}

class qqfileuploader {
    private $allowedExtensions = array();
    private $sizeLimit = 10485760;
    private $file;

    function __construct(array $allowedExtensions = array(), $sizeLimit = 10485760, $filename = ''){        
        $allowedExtensions = array_map("strtolower", $allowedExtensions);
            
        $this->allowedExtensions = $allowedExtensions;        
        $this->sizeLimit = $sizeLimit;
        
        $this->checkServerSettings();       

        if (isset($_GET['logo'])) {
            $this->file = new qqUploadedFileXhr();
        } elseif (isset($_FILES['logo'])) {
            $this->file = new qqUploadedFileForm();
        } elseif ($filename) {
        	$this->file = new qqUploadedFileXhr($filename);
        } else {
            $this->file = false; 
        }
    }
    
    private function checkServerSettings(){        
        $postSize = $this->toBytes(ini_get('post_max_size'));
        $uploadSize = $this->toBytes(ini_get('upload_max_filesize'));        
        
        if ($postSize < $this->sizeLimit || $uploadSize < $this->sizeLimit){
            $size = max(1, $this->sizeLimit / 1024 / 1024) . 'M';             
            die("{'error':'increase post_max_size and upload_max_filesize to $size'}");    
        }        
    }
    
    private function toBytes($str){
        $val = trim($str);
        $last = strtolower($str[strlen($str)-1]);
        switch($last) {
            case 'g': $val *= 1024;
            case 'm': $val *= 1024;
            case 'k': $val *= 1024;        
        }
        return $val;
    }
    
    /**
     * Returns array('success'=>true) or array('error'=>'error message')
     */
    function handleUpload($s_target_directory, $target_file, $replaceOldFile = FALSE){
        if (!is_writable($s_target_directory)){
            return array('error' => "Server error. Upload directory isn't writable.",'path'=>$s_target_directory);
        }
        $s_target_directory = $s_target_directory;
        if (!$this->file){
            return array('error' => 'No files were uploaded.');
        }
        
        $size = $this->file->getSize();
        
        if ($size == 0) {
            return array('error' => 'File is empty');
        }
        
        if ($size > $this->sizeLimit) {
            return array('error' => 'File is too large');
        }
        
        $pathinfo = pathinfo($target_file);
        $filename = $pathinfo['filename'];
        //$filename = md5(uniqid());
        $ext = $pathinfo['extension'];

        if($this->allowedExtensions && !in_array(strtolower($ext), $this->allowedExtensions)){
            $these = implode(', ', $this->allowedExtensions);
            return array('error' => 'File has an invalid extension, it should be one of '. $these . '.');
        }
        
        if(!$replaceOldFile){
            /// don't overwrite previous files that were uploaded
            while (file_exists($s_target_directory . '/' . $filename . '.' . $ext)) {
                $filename .= rand(10, 99);
            }
        }
        
        if ($this->file->save($s_target_directory . '/' . $filename . '.' . $ext)){
            return array('success'=>true, 'saved_as' => $s_target_directory . '/' . $filename . '.' . $ext, 'filename' => $filename . '.' . $ext, 'name' => $filename, 'ext' => strtolower($ext));
        } else {
            return array('error'=> 'Could not save uploaded file.' .
                'The upload was cancelled, or server error encountered');
        }
        
    } 
}
