<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Detail extends CI_Controller {

    public function index($id)
    {
        $this->load->library('session');
        $this->load->model('Users');
        $this->load->view('home/begin');

            $data['member'] = $this->Users->getById($id);
        // add a query to determin if this is a friend
            $data['status'] = "hard coded";

        //echo '<pre>'.print_r($data, true).'</pre>';

            $this->load->view('home/sidebaractivesession');
            $this->load->view('home/contentbegin');
            $this->load->view('home/rulelarge');
            $this->load->view('detail/detail', $data );

        $this->load->view('home/contentend');
        $this->load->view('home/end');

    }

}
