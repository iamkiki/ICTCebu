<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * companies model
 *
 * @file		m_companies.php
 * @version		1.0
 * @created		04/14/2012
 * @date		04/14/2012
 *
 */
class m_companies extends CI_Model
{
    /**
     * __construct !important
     */
    public function __construct()
    {
        parent::__construct();
        $a_fields = $this->db->list_fields(TBL_COMPANIES);
        foreach( $a_fields as $s_field )
        {
                $this->$s_field = NULL;
        }
    }

    /**
     * loads user based on conditions passed
     * @scope	public
     * @param	array	filters
     * @return  mixed   array result if true, else boolean false
     */
    function load( $a_data )
    {
    	foreach( $a_data as $s_key => $s_value )
    	{
    		$this->db->where($s_key, $s_value);
    	}
    	$r_result = $this->db->get( TBL_COMPANIES );
    	if ( $r_result->num_rows() > 0 )
    	{
    		foreach( $r_result->row_array() as $s_key => $s_value )
			{
				$this->$s_key = $s_value;
			}
			return $r_result;
    	}
    	else
    	{
    		return false;
    	}
    }

    /**
     * logs in a user
     * @scope       public
     * @param		array       if an array is passed, the array will be used
     * @return		boolean     TRUE on success, FALSE on error
     */
    public function register( $a_data = false )
    {
        $this->session->sess_destroy();
        if (!$a_data) {
            $result = 0;
        } else {
            $a_fields = array(
               'email'          => $a_data['email'] ,
               'password'       => do_hash($a_data['password']) ,
               'name'           => $a_data['company_name'] ,
               'category'       => $a_data['category'] ,
               'person'         => $a_data['person'] ,
               'contact'        => $a_data['contact'] ,
               'address'        => $_POST['address'] ,
               'city'           => $a_data['city'] ,
               'zip'            => $a_data['zip'] ,
               'description'    => $a_data['description'] ,
               'website'        => $a_data['website'] ,
               'status'         => 0
            );

            $this->db->insert(TBL_COMPANIES, $a_fields);
            $result = $this->db->insert_id();

        }

        return $result;
    }
    
    /**
     * loads admin based on conditions passed
     * @scope	public
     * @param	array	filters
     * @return  mixed   array result if true, else boolean false
     */
    function loadadmin( $a_data )
    {
    	foreach( $a_data as $s_key => $s_value )
    	{
    		$this->db->where($s_key, $s_value);
    	}
    	$r_result = $this->db->get( TBL_ADMINS );
    	if ( $r_result->num_rows() > 0 )
    	{
    		foreach( $r_result->row_array() as $s_key => $s_value )
			{
				$this->$s_key = $s_value;
			}
			return $r_result;
    	}
    	else
    	{
    		return false;
    	}
    }


    /**
     * updates user info
     * @scope       public
     * @param	int     user id
     * @param       array	if an array is passed, the array will be used
     * @return	int     number of rows affected
     */
    function update($i_id = 0, $a_data = false){
        $i_result = 0;

        if ( !$a_data )
        {
        	$a_data = get_object_vars( $this );
        	$i_id = $a_data['id'];
        }

        if(count($a_data) && $i_id > 0) {

            $this->db->where('id', $i_id);
            $i_result = $this->db->update(TBL_COMPANIES, $a_data);

        }

        return $i_result;
    }
    
    
    /**
	 * creates admin
	 * @scope       public
	 * @param		array       if an array is passed, the array will be used
	 * @return		boolean     TRUE on success, FALSE on error
	 */
	public function createadmin( $a_data = false )
	{
		if (!$a_data) {
            $result = 0;
		} else {
            $a_fields = array(
               'name'     		=> $a_data['name'] ,
               'password'      	=> do_hash($a_data['password']) ,
               'email'          => $a_data['email'],
               'status'			=> 1
            );

            $this->db->insert(TBL_ADMINS, $a_fields);
            $result = $this->db->insert_id();
        }
		
		return $result;
	}
	
	/**
	 * updates admin info
	 * @scope       public
	 * @param		int     user id
     * @param       array	if an array is passed, the array will be used
	 * @return		int     number of rows affected
	 */
    function updateadmin($i_id = 0, $a_data = false){
        $i_result = 0;
        
        if ( !$a_data )
        {
        	$a_data = get_object_vars( $this );
        	$i_id = $a_data['id'];
        }
        
        if(count($a_data) && $i_id > 0) {

            $this->db->where('id', $i_id);
            $i_result = $this->db->update(TBL_ADMINS, $a_data);
            
        }

        return $i_result;
    }
    
    /**
     * Gets all companies
     * @scope	public
     * @param   void
     * @return  array   list of users
     */
    function get_companies($i_start = false, $i_limit = false){
        $this->load->library('aes');

        $s_sql = 'SELECT * FROM '.TBL_USERS.' WHERE status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        $a_data = array();
        $i = 0;
        foreach ($r_query as $s_key => $a_user){
            $a_data[$i] = $a_user;
            $a_data[$i]->email = $this->aes->decrypt(base64_decode($a_user->email));
            $i++;
        }
        
        return $a_data;
    }


}

/* End of file m_companies.php */
/* Location: ./application/models/m_companies.php */