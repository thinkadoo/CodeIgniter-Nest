<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->helper('utils');
        $this->load->library('session');
        $this->load->helper('htmlpurifier');
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

        $this->load->view('login/login');

        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');
    }

    public function loginFunction()
    {
        if (isset($_POST['username'])) {

            $user = purify($this->input->post('username', TRUE));
            $pass = purify($this->input->post('password', TRUE));

            if ($user == "" || $pass == "") {
                $this->load->view('home/begin');
                $this->load->view('home/sidebar');
                $this->load->view('home/contentbegin');
                $this->load->view('home/header');
                $this->load->view('home/rulelarge');

                $this->load->view('login/notall');

                $this->load->view('home/rule');
                $this->load->view('home/contentend');
                $this->load->view('home/end');
            }
            else
            {
                $validated = $this->Users->idUser($user, $pass);

                if ($validated == false) {
                    $this->load->view('home/begin');
                    $this->load->view('home/sidebar');
                    $this->load->view('home/contentbegin');
                    $this->load->view('home/header');
                    $this->load->view('home/rulelarge');

                    $this->load->view('login/failed');

                    $this->load->view('home/rule');
                    $this->load->view('home/contentend');
                    $this->load->view('home/end');
                }
                else
                {
                    $this->session->set_userdata('user_name', $user);

                    $data = array(
                        'username' => $user,
                    );

                    //echo "<pre>".print_r($this->session->userdata, true)."</pre>";

                    $this->load->view('home/begin');
                    $this->load->view('home/sidebar');
                    $this->load->view('home/contentbegin');
                    $this->load->view('home/header');
                    $this->load->view('home/rulelarge');

                    $this->load->view('login/success', $data);

                    $this->load->view('home/rule');
                    $this->load->view('home/contentend');
                    $this->load->view('home/end');

                }
            }
        }
    }

}