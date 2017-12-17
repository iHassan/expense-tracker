<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * get all categories
     * @return [mixed] object | false
     */
    public function get_categories()
    {
        $query = $this->db->select('category_id, category_name')
                ->get('category');

        if ($query->num_rows() >= 1) { // record found
            return $query->result_object();
        }
        return false;
    }

    /**
     * insert budget reminder
     * @param  array $user_data user data to be saved
     * @return bool  true/false
     */
    public function insert_budget($user_data)
    {
        $query = $this->db->insert('budget_reminder', $user_data);
          return ($query) ? true: false ;
    }   

    /**
     * get all categories
     * @return [mixed] object | false
     */
    public function get_budget_reminders()
    {
        $query = $this->db->select('user_id')
                ->where('is_reminded',0)
                ->where('remind_date >',date('Y-m-d'))
                ->get('budget_reminder');

        if ($query->num_rows() >= 1) { // record found
            return $query->result_object();
        }
        return false;
    } 

}

/* End of file Budget_model.php */
/* Location: ./application/models/Budget_model.php */