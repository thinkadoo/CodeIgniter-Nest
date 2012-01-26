<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users');
        $this->load->library('session');
        $this->load->helper('htmlpurifier');
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
            $user = purify($this->input->post('username', TRUE));
            $pass = purify($this->input->post('password', TRUE));

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
                    if (isset($_FILES['image']['name']))
                    {
                        $saveto = "profileimages/$user.jpg";
                        move_uploaded_file($_FILES['image']['tmp_name'], $saveto);
                        $typeok = TRUE;

                        switch($_FILES['image']['type'])
                        {
                            case "image/gif":   $src = imagecreatefromgif($saveto); break;

                            case "image/jpeg":  // Both regular and progressive jpegs
                            case "image/pjpeg":	$src = imagecreatefromjpeg($saveto); break;

                            case "image/png":   $src = imagecreatefrompng($saveto); break;

                            default:			$typeok = FALSE; break;
                        }

                        if ($typeok)
                        {
                            list($w, $h) = getimagesize($saveto);
                            $max = 100;
                            $tw  = $w;
                            $th  = $h;

                            if ($w > $h && $max < $w)
                            {
                                $th = $max / $w * $h;
                                $tw = $max;
                            }
                            elseif ($h > $w && $max < $h)
                            {
                                $tw = $max / $h * $w;
                                $th = $max;
                            }
                            elseif ($max < $w)
                            {
                                $tw = $th = $max;
                            }

                            $tmp = imagecreatetruecolor($tw, $th);
                            imagecopyresampled($tmp, $src, 0, 0, 0, 0, $tw, $th, $w, $h);
                            imageconvolution($tmp, array( // Sharpen image
                                array(-1, -1, -1),
                                array(-1, 16, -1),
                                array(-1, -1, -1)
                            ), 8, 0);
                            imagejpeg($tmp, $saveto);
                            imagedestroy($tmp);
                            imagedestroy($src);
                        }
                    }

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