<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * jobs model
 *
 * @file		m_jobs.php
 * @version		1.0
 * @created		04/14/2012
 * @date		04/14/2012
 *
 */
class m_jobs extends CI_Model
{
    /**
     * __construct !important
     */
    public function __construct()
    {
        parent::__construct();
        $a_fields = $this->db->list_fields(TBL_JOBS);
        foreach( $a_fields as $s_field )
        {
                $this->$s_field = NULL;
        }
    }

    /**
     * loads job based on conditions passed
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
    	$r_result = $this->db->get( TBL_JOBS );
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
     * create job
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
               'company_id'  	=> $a_data['company_id'] ,
               'title'       	=> $a_data['title'] ,
               'category'    	=> $a_data['category'] ,
               'experience'     => $a_data['experience'] ,
               'location'       => $a_data['location'] ,
               'requirements'   => $a_data['requirements'] ,
               'email'          => $a_data['email'] ,
               'cost'           => $a_data['cost'] ,
               'expiry_date'    => $a_data['expiry'] ,
               'status'         => 0
            );

            $this->db->insert(TBL_JOBS, $a_fields);
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
            $i_result = $this->db->update(TBL_JOBS, $a_data);
            
        }

        return $i_result;
    }

    
    /**
     * Gets all jobs
     * @scope	public
     * @param   void
     * @return  array   list of jobs
     */
    function get_jobs($i_start = false, $i_limit = false){
		/* status 2 - inactive */
        $s_sql = 'SELECT j.*, c.name as company FROM '.TBL_JOBS.' AS j INNER JOIN '.TBL_COMPANIES.' AS c ON c.id = j.company_id WHERE status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }
	
	/**
     * Gets all jobs by category
     * @scope	public
     * @param   void
     * @return  array   list of jobs
     */
    function sort_jobs($i_category, $i_start = false, $i_limit = false){
		/* status 2 - inactive */
        $s_sql = 'SELECT j.*, c.name as company FROM '.TBL_JOBS.' AS j INNER JOIN '.TBL_COMPANIES.' AS c ON c.id = j.company_id WHERE j.category = '.$i_category.' AND j.status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }
	    
    /**
     * Gets all jobs by company
     * @scope	public
     * @param   void
     * @return  array   list of jobs
     */
    function get_listings($i_id, $i_start = false, $i_limit = false){
		/* status 2 - inactive */
        $s_sql = 'SELECT * FROM '.TBL_JOBS.' WHERE company_id = '.$i_id.' AND status != 2';
        if ( $i_limit )
		{
			$s_sql .= ' LIMIT '.($i_start ? $i_start : 0).','.$i_limit;
		}

        $r_query = $this->db->query($s_sql)->result();
        
        return $r_query;
    }
	
	function search(){
		
	}
	
}

/* End of file m_jobs.php */
/* Location: ./application/models/m_jobs.php */