<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class User_Profile_Model
 */
class User_Profile_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * getch user record by id
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] object | false
     */
    public function get_user($user_id)
    {
        $query = $this->db->select('u.*')
                ->where('u.id', $user_id)
                ->get('users u');

        if ($query->num_rows() == 1) { // record found
            return $query->row();
        }
        return false;
    }

    /**
     * update user record 
     * @param  int $user_id   [logged in user id]
     * @param  array $user_data [user data to be updated]
     * @return bool  true/false
     */
    public function update_user($user_id, $user_data)
    {
        $query = $this->db->where('id', $user_id)
                    ->update('users', $user_data);
        if ($query) { // record updated
            return true;
        }
        return false;
    }
}

/* End of file User_Profile_Model.php */
/* Location: ./application/models/User_Profile_Model.php */