<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * get user total income
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] object_row | false
     */
    public function total_income($user_id)
    {
        $query = $this->db->select('income, bonus, additional_allowance')
                ->where('user_id', $user_id)
                ->get('user_income');

        if ($query->num_rows() == 1) { // record found
            return $query->row();
        }
        return false;
    }

    /**
     * get user total income
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] object_row | false
     */
    public function total_spent($user_id)
    {
        $query = $this->db->select('SUM(amount) as spent')
                ->where('user_id', $user_id)
                ->get('user_expense');

        if ($query->num_rows() == 1) { // record found
            return $query->row()->spent;
        }
        return false;
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

}

/* End of file Dashboard_Model.php */
/* Location: ./application/models/Dashboard_Model.php */