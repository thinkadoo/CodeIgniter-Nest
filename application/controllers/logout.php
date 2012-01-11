<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->helper('utils');
        $this->load->library('session');
    }

    public function index()
    {
        $this->session->sess_destroy();

        //echo "<pre>".print_r($this->session->userdata, true)."</pre>";

        $this->load->view('home/begin');
        $this->load->view('home/sidebar');
        $this->load->view('home/contentbegin');
        $this->load->view('home/header');
        $this->load->view('home/rulelarge');

        $this->load->view('logout/logout');

        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');

    }


}