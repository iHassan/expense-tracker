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

        if ($query && $query->num_rows() == 1) { // record found
            return $query->row();
        }
        return false;
    }

    /**
     * get all categories
     * @param  [int] $user_id [logged in user id]
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
     * insert user expense
     * @param  [int] $user_id [logged in user id]
     * @param  array $user_data [user data to be saved]
     * @return [bool] true | false
     */
    public function insert_expense($user_id, $user_data)
    {
        $q = $this->db->insert('user_expense', $user_data);
        return ($q) ? true : false;
    }

    /**
     * get user all expenses record
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] object | false
     */
    public function get_user_expenses($user_id)
    {
        $query = $this->db->select('ue.*,c.category_name')
                ->join('category c', 'c.category_id = ue.category_id', 'left')
                ->where('ue.user_id', $user_id)
                ->get('user_expense ue');

        if ($query->num_rows() >= 1) { // record found
            return $query->result_object();
        }
        return false;
    }

    /**
     * get user expense record by id
     * @param  [int] $expense_id [user expense id]
     * @param  [int] $user_id [logged in user id]
     * @return [mixed] object_row | false
     */
    public function get_expense_by_id($expense_id, $user_id)
    {
        $query = $this->db->select('ue.*,c.category_name')
                ->join('category c', 'c.category_id = ue.category_id', 'left')
                ->where('ue.user_id', $user_id)
                ->where('ue.expense_id', $expense_id)
                ->get('user_expense ue');

        if ($query->num_rows() == 1) { // record found
            return $query->row();
        }
        return false;
    }

     /**
     * update user expense 
     * @param  int $expense_id   [user expense id]
     * @param  int $user_id   [logged in user id]
     * @param  array $user_data [user data to be updated]
     * @return bool  true/false
     */
    public function update_expense($expense_id, $user_id, $user_data)
    {
        $query = $this->db->where('user_id', $user_id)
                    ->where('expense_id', $expense_id)
                    ->update('user_expense', $user_data);
        if ($query) { // record updated
            return true;
        }
        return false;
    }

}