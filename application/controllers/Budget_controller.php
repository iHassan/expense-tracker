<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Budget_controller extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('Budget_model');
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->lang->load('auth');

        if (!$this->ion_auth->logged_in()) {
            redirect('app/login', 'refresh');
        }

    }

    /**
     * add budget reminder
     * @return view
     */
    public function add_budget()
    {
        $data['categories']=$this->Budget_model->get_categories();

        if ( $this->input->is_ajax_request() ) { // user is requesting page from left navigation
            $this->load->view('app/add_budget', $data);
        } else {

            if ( $this->input->post('submitBtn') ) { // form is submitted
                
                $this->form_validation->set_rules('remind_date', 'Date', 'trim|required');
                $this->form_validation->set_rules('description', 'Description', 'trim');
                $this->form_validation->set_rules('category', 'Category', 'trim|required');

                if ($this->form_validation->run() == FALSE) { //invalid/missing values in one or more input fields
                    
                    $data['error_message'] = validation_errors();
                    $data['main_content'] = 'app/add_budget';
                    $this->load->view('app/includes/template', $data);
                            
                } else if ($this->input->post('remind_date')<=date('Y-m-d')) {
                    
                    $data['error_message'] = 'Date must be greater than today';
                    $data['main_content'] = 'app/add_budget';
                    $this->load->view('app/includes/template', $data);

                } else { // insert user's expense
                        
                    $remind_date = trim(strip_tags(htmlentities($this->input->post('remind_date'))));
                    $description  = trim(strip_tags(htmlentities($this->input->post('description'))));
                    $category     = trim(strip_tags(htmlentities($this->input->post('category'))));
                    $user_id      = $this->ion_auth->get_user_id();
                    
                    $remind_date = strtotime($remind_date)? $remind_date : date('Y-m-d');
                    
                    $user_data = array(
                        'user_id'      => $user_id,
                        'category_id'  => $category,
                        'description'  => $description,
                        'remind_date' => $remind_date,
                        'is_reminded' => 0
                        );

                    $insert = $this->Budget_model->insert_budget($user_data);
                    
                    if ($insert) {
                        $data['success_message'] = 'Budget Reminder Added Succesfully';
                    } else {
                        $data['error_message'] = 'Sorry there was an error. Please try again';
                    }
                    
                    
                    $data['main_content'] = 'app/add_budget';
                    $this->load->view('app/includes/template', $data);

                }

            } else { // user is accessing page directly from url
                
                $data['main_content'] = 'app/add_budget';
                $this->load->view('app/includes/template', $data);
            
            }
        }
    }

    /**
     * sent budget reminder to user via email
     * @return bool
     */
    public function email_reminder()
    {
        $remind=$this->Budget_model->get_budget_reminders();

        if ($remind) {
            
            foreach ($remind as $res) {
                
                echo $res->user_id;
                
            }
        }
        
    }


}

/* End of file Budget_controller.php */
/* Location: ./application/controllers/Budget_controller.php */
