<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Expense Model
 */
class Expense_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * insert/update user income 
     * @param  int $user_id   logged in user id
     * @param  array $user_data user data to be saved
     * @return bool  true/false
     */
    public function insert_income($user_id, $user_data)
    {
        $query = $this->db->select('user_id')
                ->where('user_id', $user_id)
                ->limit(1)
                ->get('user_income');

        if ($query->num_rows() !== 1) { // no previous record found. insert new record
            $this->db->insert('user_income', $user_data);
            return true;
        } else {
            $this->db->where('user_id', $user_id)
                    ->update('user_income', $user_data);
            return false;
        }
    }

    /**
     * get user income record by id
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] single row | false
     */
    public function get_income($user_id)
    {
        $query = $this->db->select('income,bonus,additional_allowance')
                ->where('user_id', $user_id)
                ->limit(1)
                ->get('user_income');

        if ($query->num_rows() == 1) { // record found
            return $query->row();
        }
        return false;
    }

}