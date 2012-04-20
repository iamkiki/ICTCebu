<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * admin model
 *
 * @file		m_admin.php
 * @version		1.0
 * @created		04/14/2012
 * @date		04/14/2012
 *
 */
class m_admin extends CI_Model
{
    /**
     * __construct !important
     */
    public function __construct()
    {
        parent::__construct();
        $a_fields = $this->db->list_fields(TBL_ADMINS);
        foreach( $a_fields as $s_field )
        {
                $this->$s_field = NULL;
        }
    }
    
    /**
     * loads admin based on conditions passed
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
     * updates admin info
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
            $i_result = $this->db->update(TBL_ADMINS, $a_data);

        }

        return $i_result;
    }
    
    
    /**
	 * creates admin
	 * @scope       public
	 * @param		array       if an array is passed, the array will be used
	 * @return		boolean     TRUE on success, FALSE on error
	 */
	public function create( $a_data = false )
	{
		if (!$a_data) {
            $result = 0;
		} else {
            $a_fields = array(
               'name'     		=> $a_data['name'] ,
               'password'      	=> do_hash($a_data['password']) ,
               'email'          => $a_data['email'],
               'status'			=> 1,
               'last_login'		=> time()
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
    function update($i_id = 0, $a_data = false){
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


}

/* End of file m_admin.php */
/* Location: ./application/models/m_admin.php */