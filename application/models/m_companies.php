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
     * loads company based on conditions passed
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
               'address'        => $a_data['address'] ,
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
	 * updates company info
	 * @scope       public
	 * @param		int     company id
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
            $i_result = $this->db->update(TBL_COMPANIES, $a_data);
            
        }

        return $i_result;
    }

    
    /**
     * Gets 5 companies for home featured based on views
     * @scope	public
     * @param   void
     * @return  array   list of companies
     */
    function get_featured(){
        $s_sql = 'SELECT * FROM '.TBL_COMPANIES.' WHERE status = 1 ORDER BY views DESC LIMIT 5';

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }
    
    /**
     * Gets all companies
     * @scope	public
     * @param   void
     * @return  array   list of companies
     */
    function get_companies($i_start = false, $i_limit = false){
		/* status 2 - inactive */
        $s_sql = 'SELECT * FROM '.TBL_COMPANIES.' WHERE status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }
    
     /**
     * Gets all companies by category
     * @scope	public
     * @param   void
     * @return  array   list of companies
     */
    function sort_companies($i_category, $i_start = false, $i_limit = false){
        $s_sql = 'SELECT * FROM '.TBL_COMPANIES.' WHERE category = '.$i_category.' AND status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }

}

/* End of file m_companies.php */
/* Location: ./application/models/m_companies.php */