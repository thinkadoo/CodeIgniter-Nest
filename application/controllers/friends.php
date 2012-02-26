<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friends extends CI_Controller {

    public function index($newfriendid)
    {

        $this->load->library('session');
        $this->load->model('Friends_m');
        //echo '<pre>'.print_r($this->session->userdata('user_name'), true).'</pre>';
        //echo '<pre>'.print_r($newfriendid, true).'</pre>';

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
            $data['member'] = $this->Friends_m->create($newfriendid);
            $data['status'] = "You are now following USERNAME";

            //echo '<pre>'.print_r($data, true).'</pre>';

            $this->load->view('home/sidebaractivesession');
            $this->load->view('home/contentbegin');
            $this->load->view('home/rulelarge');
            $this->load->view('detail/detail', $data );

        }
        $this->load->view('home/contentend');
        $this->load->view('home/end');
    }

}