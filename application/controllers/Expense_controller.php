<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Expense_controller extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('Expense_model');
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->lang->load('auth');

        if (!$this->ion_auth->logged_in())
        {
            redirect('app/login', 'refresh');
        }
        
    }

    /**
     * view income page
     * add/update user income
     * @return view
     */
    public function add_income()
    {
        if ( $this->input->is_ajax_request() ) { // user is requesting page from left navigation
            $data['result']=$this->Expense_model->get_income($this->ion_auth->get_user_id());
            $this->load->view('app/create_income', $data);
        } else {

            if ( $this->input->post('submitBtn') ) { // form is submitted
                $this->form_validation->set_rules('income', 'Income', 'trim|required|is_natural_no_zero|integer|min_length[3]|max_length[11]');
                $this->form_validation->set_rules('bonus', 'Bonus', 'trim|is_natural_no_zero|integer|min_length[3]|max_length[11]');
                $this->form_validation->set_rules('allowance', 'Allowance', 'trim|is_natural_no_zero|integer|min_length[3]|max_length[11]');

                if ($this->form_validation->run() == FALSE) { //invalid values in one or more input fields
                    
                    $data['result']=$this->Expense_model->get_income($this->ion_auth->get_user_id());
                    $data['error_message'] = validation_errors();
                    $data['main_content'] = 'app/create_income';
                    $this->load->view('app/includes/template', $data);
                            
                } else { // insert/update user's income record
                        
                    $income = trim(strip_tags(htmlentities($this->input->post('income'))));
                    $bonus = trim(strip_tags(htmlentities($this->input->post('bonus'))));
                    $allowance = trim(strip_tags(htmlentities($this->input->post('allowance'))));
                    $user_id = $this->ion_auth->get_user_id();
                    
                    $user_data = array(
                        'user_id'              => $user_id,
                        'income'               => $income,
                        'bonus'                => $bonus,
                        'additional_allowance' => $allowance,
                        'created_date'         => date('Y-m-d H:i:S')
                        );

                    $insert = $this->Expense_model->insert_income($user_id,$user_data);
                    
                    if ($insert) {
                        $data['result']=$this->Expense_model->get_income($this->ion_auth->get_user_id());
                        $data['success_message'] = 'Income Added Succesfully';
                    } else {
                        $data['result']=$this->Expense_model->get_income($this->ion_auth->get_user_id());
                        $data['success_message'] = 'Income Updated Succesfully';
                    }
                    
                    
                    $data['main_content'] = 'app/create_income';
                    $this->load->view('app/includes/template', $data);

                }

            } else { // user is accessing page directly from url
                
                $data['result']=$this->Expense_model->get_income($this->ion_auth->get_user_id());
                $data['main_content'] = 'app/create_income';
                $this->load->view('app/includes/template', $data);
            
            }
            
        }
    }

    /**
     * add new expense
     * add user expense 
     * @return view
     */
    public function new_expense()
    {
        
        $data['categories']=$this->Expense_model->get_categories();

        if ( $this->input->is_ajax_request() ) { // user is requesting page from left navigation
            $this->load->view('app/new_expense', $data);
        } else {

            if ( $this->input->post('submitBtn') ) { // form is submitted

                $this->form_validation->set_rules('amount', 'Amount', 'trim|required|is_natural_no_zero|integer|min_length[3]|max_length[11]');
                $this->form_validation->set_rules('expense_date', 'Date', 'trim|required');
                $this->form_validation->set_rules('description', 'Description', 'trim');
                $this->form_validation->set_rules('category', 'Category', 'trim|required');

                if ($this->form_validation->run() == FALSE) { //invalid/missing values in one or more input fields
                    
                    $data['error_message'] = validation_errors();
                    $data['main_content'] = 'app/new_expense';
                    $this->load->view('app/includes/template', $data);
                            
                } else { // insert user's expense
                        
                    $amount       = trim(strip_tags(htmlentities($this->input->post('amount'))));
                    $expense_date = trim(strip_tags(htmlentities($this->input->post('expense_date'))));
                    $description  = trim(strip_tags(htmlentities($this->input->post('description'))));
                    $category     = trim(strip_tags(htmlentities($this->input->post('category'))));
                    $user_id      = $this->ion_auth->get_user_id();
                    
                    $expense_date = strtotime($expense_date)? $expense_date : date('Y-m-d');
                    
                    $user_data = array(
                        'user_id'      => $user_id,
                        'amount'       => $amount,
                        'description'  => $description,
                        'category_id'  => $category,
                        'expense_date' => $expense_date,
                        'created_date' => date('Y-m-d H:i:S')
                        );

                    $insert = $this->Expense_model->insert_expense($user_id,$user_data);
                    
                    if ($insert) {
                        $data['success_message'] = 'Expense Added Succesfully';
                    } else {
                        $data['success_message'] = 'Sorry there was an error. Please try again';
                    }
                    
                    
                    $data['main_content'] = 'app/new_expense';
                    $this->load->view('app/includes/template', $data);

                }

            } else { // user is accessing page directly from url
                
                $data['main_content'] = 'app/new_expense';
                $this->load->view('app/includes/template', $data);
            
            }
            
        }
    }

    /**
     * view user expenses
     * @return view
     */
    public function expense_overview()
    {
        
        $data['result']=$this->Expense_model->get_user_expenses($this->ion_auth->get_user_id());

        if ( $this->input->is_ajax_request() ) { // user is requesting page from left navigation
            $this->load->view('app/expense_overview', $data);
        } else {

            if ( $this->input->post('submitBtn') ) { // form is submitted

                $this->form_validation->set_rules('amount', 'Amount', 'trim|required|is_natural_no_zero|integer|min_length[3]|max_length[11]');
                $this->form_validation->set_rules('expense_date', 'Date', 'trim|required');
                $this->form_validation->set_rules('description', 'Description', 'trim');
                $this->form_validation->set_rules('category', 'Category', 'trim|required');

                if ($this->form_validation->run() == FALSE) { //invalid/missing values in one or more input fields
                    
                    $data['error_message'] = validation_errors();
                    $data['main_content'] = 'app/expense_overview';
                    $this->load->view('app/includes/template', $data);
                            
                } else { // insert user's expense
                        
                    $amount       = trim(strip_tags(htmlentities($this->input->post('amount'))));
                    $expense_date = trim(strip_tags(htmlentities($this->input->post('expense_date'))));
                    $description  = trim(strip_tags(htmlentities($this->input->post('description'))));
                    $category     = trim(strip_tags(htmlentities($this->input->post('category'))));
                    $user_id      = $this->ion_auth->get_user_id();
                    
                    $expense_date = strtotime($expense_date)? $expense_date : date('Y-m-d');
                    
                    $user_data = array(
                        'user_id'      => $user_id,
                        'amount'       => $amount,
                        'description'  => $description,
                        'category_id'  => $category,
                        'expense_date' => $expense_date,
                        'created_date' => date('Y-m-d H:i:S')
                        );

                    $insert = $this->Expense_model->insert_expense($user_id,$user_data);
                    
                    if ($insert) {
                        $data['success_message'] = 'Expense Added Succesfully';
                    } else {
                        $data['success_message'] = 'Sorry there was an error. Please try again';
                    }
                    
                    
                    $data['main_content'] = 'app/expense_overview';
                    $this->load->view('app/includes/template', $data);

                }

            } else { // user is accessing page directly from url
                
                $data['main_content'] = 'app/expense_overview';
                $this->load->view('app/includes/template', $data);
            
            }
            
        }
    }

}