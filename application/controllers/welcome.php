<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->library('session');

        echo "<pre>".print_r($this->session->userdata, true)."</pre>";

        $this->load->view('home/begin');
        $this->load->view('home/sidebar');
        $this->load->view('home/contentbegin');
        $this->load->view('home/header');
        $this->load->view('home/rulelarge');

    if (($this->session->userdata('user_name')) == '')
    {
        $this->load->view('home/welcome');
    }
    else
    {
        $data = array(
            'username' => $this->session->userdata('user_name'),
        );
        $this->load->view('home/welcomeactivesession',$data);

    }

        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */