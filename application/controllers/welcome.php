<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->library('session');

        //echo "<pre>".print_r($this->session->userdata, true)."</pre>";

        $this->load->view('home/begin');
        //$this->load->view('home/sidebar');
        //$this->load->view('home/contentbegin');
        //$this->load->view('home/header');
        //$this->load->view('home/rulelarge');

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
        //echo "<pre>".print_r($this->session->userdata, true)."</pre>";
        $data = array(
            'username' => $this->session->userdata('user_name'),
            'firstname' => $this->session->userdata('user_firstname'),
            'lastname' => $this->session->userdata('user_lastname'),
            'email' => $this->session->userdata('user_email'),
            'age' => $this->session->userdata('user_age'),
            'description' => $this->session->userdata('user_description'),
        );
        $this->load->view('home/sidebaractivesession');
        $this->load->view('home/contentbegin');
        //$this->load->view('home/header');
        $this->load->view('home/rulelarge');
        $this->load->view('home/welcomeactivesession',$data);

    }

        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');
	}

}
