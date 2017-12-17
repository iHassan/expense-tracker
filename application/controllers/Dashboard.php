<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        $this->load->model('Dashboard_Model');
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

        $data['t_i']=$this->Dashboard_Model->total_income($this->ion_auth->get_user_id());
        $data['t_s']=$this->Dashboard_Model->total_spent($this->ion_auth->get_user_id());
        $data['user']=$this->Dashboard_Model->get_user($this->ion_auth->get_user_id());

        if ($this->input->is_ajax_request()) {
            $data[]='';
            $this->load->view('app/dashboard', $data);
        } else {
            $data['main_content'] = 'app/dashboard';
            $this->load->view('app/includes/template', $data);
        }
    }

}