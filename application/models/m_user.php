<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * user model
 *
 * @file		m_user.php
 * @version		1.0
 * @created		04/14/2012
 * @date		04/14/2012
 *
 */
class m_user extends CI_Model
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
               'city'           => $a_data['city'] ,
               'zip'            => $a_data['zip'] ,
               'description'    => $a_data['description'] ,
               'website'        => $a_data['website'] ,
               'status'         => 0
            );

            if(isset($_POST['address1'])){
                $s_address = $_POST['address1'];
                if(isset($_POST['address2'])){
                    $s_address .= $_POST['address2'];
                }
                $a_fields['address'] = $s_address;
            }

            $this->db->insert(TBL_COMPANIES, $a_fields);
            $result = $this->db->insert_id();

        }

        return $result;
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


}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */