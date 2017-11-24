<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
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
        echo "welcome to app dashboard";
    }

}