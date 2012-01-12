<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller
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

        $this->load->view('home/begin');
        $this->load->view('home/sidebar');
        $this->load->view('home/contentbegin');
        $this->load->view('home/header');
        $this->load->view('home/rulelarge');

        $this->load->view('signup/signup');

        $this->load->view('home/rule');
        $this->load->view('home/contentend');
        $this->load->view('home/end');
    }

    public function signupFunction()
    {
        if (isset($_POST['username'])) {
            $user = sanitizeString($_POST['username']);
            $pass = sanitizeString($_POST['password']);

            if ($user == "" || $pass == "") {
                $this->load->view('home/begin');
                $this->load->view('home/sidebar');
                $this->load->view('home/contentbegin');
                $this->load->view('home/header');
                $this->load->view('home/rulelarge');

                $this->load->view('signup/notall');

                $this->load->view('home/rule');
                $this->load->view('home/contentend');
                $this->load->view('home/end');
            }
            else
            {

                $created = $this->Users->create();

                if ($created == false) {
                    $this->load->view('home/begin');
                    $this->load->view('home/sidebar');
                    $this->load->view('home/contentbegin');
                    $this->load->view('home/header');
                    $this->load->view('home/rulelarge');

                    $this->load->view('signup/failed');

                    $this->load->view('home/rule');
                    $this->load->view('home/contentend');
                    $this->load->view('home/end');
                }
                else
                {
                    $data = array(
                        'username' => $user,
                    );

                    $this->load->view('home/begin');
                    $this->load->view('home/sidebar');
                    $this->load->view('home/contentbegin');
                    $this->load->view('home/header');
                    $this->load->view('home/rulelarge');

                    $this->load->view('signup/success', $data);

                    $this->load->view('home/rule');
                    $this->load->view('home/contentend');
                    $this->load->view('home/end');

                }
            }
        }
    }

}