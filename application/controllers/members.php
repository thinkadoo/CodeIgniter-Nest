<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $this->load->model('Users');
        $this->load->view('home/begin');

        if (($this->session->userdata('user_name')) == '')
        {
            $this->load->view('home/sidebar');
            $this->load->view('home/contentbegin');
            $this->load->view('home/header');
            $this->load->view('home/rulelarge');
            $this->load->view('home/welcome');
        }
        else
        {
            $data['members'] = $this->Users->getAll();
            //echo "<pre>".print_r($data['members'], true)."</pre>";

            $this->load->view('home/sidebaractivesession');
            $this->load->view('home/contentbegin');
            $this->load->view('home/rulelarge');
            $this->load->view('members/members', $data );

        }
        $this->load->view('home/contentend');
        $this->load->view('home/end');
    }

}
