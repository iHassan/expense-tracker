<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Edit_User_Profile extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('User_Profile_Model');
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        $this->lang->load('auth');

        if (!$this->ion_auth->logged_in())
        {
            redirect('app/login', 'refresh');
        }
        
    }

    public function index()
    {
        if ($this->input->is_ajax_request()) {
            $data['result']=$this->User_Profile_Model->get_user($this->ion_auth->get_user_id());
            $this->load->view('app/user_profile', $data);
        } else {

            if ( $this->input->post('submitBtn') ) { // form is submitted
                $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[35]');
                $this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[50]');
                $this->form_validation->set_rules('company', 'Company', 'trim|required|max_length[200]');
                $this->form_validation->set_rules('phone', 'Phone', 'trim|required|max_length[15]');

                if ($this->form_validation->run() == FALSE) { //invalid values in one or more input fields
                    
                    $data['result']=$this->User_Profile_Model->get_user($this->ion_auth->get_user_id());
                    $data['error_message'] = validation_errors();
                    $data['main_content'] = 'app/user_profile';
                    $this->load->view('app/includes/template', $data);
                            
                } else { // update user's record
                        
                    $username = trim(strip_tags(htmlentities($this->input->post('username'))));
                    $fname    = trim(strip_tags(htmlentities($this->input->post('fname'))));
                    $lname    = trim(strip_tags(htmlentities($this->input->post('lname'))));
                    $company  = trim(strip_tags(htmlentities($this->input->post('company'))));
                    $phone    = trim(strip_tags(htmlentities($this->input->post('phone'))));
                    
                    $user_data = array(
                        'username'     => $username,
                        'first_name'   => $fname,
                        'last_name'    => $lname,
                        'company'      => $company,
                        'phone'        => $phone
                        );

                    $update = $this->User_Profile_Model->update_user($this->ion_auth->get_user_id(),$user_data);
                    
                    if ($update) {
                        $data['result']=$this->User_Profile_Model->get_user($this->ion_auth->get_user_id());
                        $data['success_message'] = 'Income Added Succesfully';
                    } else {
                        $data['result']=$this->User_Profile_Model->get_user($this->ion_auth->get_user_id());
                        $data['error_message'] = 'Income Updated Succesfully';
                    }
                    
                    $data['main_content'] = 'app/user_profile';
                    $this->load->view('app/includes/template', $data);

                }

            } else { // user is accessing page directly from url
                
                $data['result']=$this->User_Profile_Model->get_user($this->ion_auth->get_user_id());
                $data['main_content'] = 'app/user_profile';
                $this->load->view('app/includes/template', $data);
            
            }
        }
    }

}