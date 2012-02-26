<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Users extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model','',TRUE);
    }


    function put_put()
    {
        $data = array(
                'username' => $this->put('username'),
                'password' => $this->put('password'),
                'firstname' => $this->put('firstname'),
                'lastname' => $this->put('lastname'),
                'email' => $this->put('email'),
                'age' => $this->put('age'),
                'description' => $this->put('description')
        );

        $id = $this->Users_model->save($data);


        $return = $this->Users_model->get_by_id($id)->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function post_post()
    {
        $data = array(
            'username' => $this->put('username'),
            'password' => $this->put('password'),
            'firstname' => $this->put('firstname'),
            'lastname' => $this->put('lastname'),
            'email' => $this->put('email'),
            'age' => $this->put('age'),
            'description' => $this->put('description')
        );

        $id = $this->Users_model->update($this->post('id'),$data);


        $return = $this->Users_model->get_by_id($this->post('id'))->row();


        if($return)
        {
            $this->response($return, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function delete_delete()
    {
        $data = $this->Users_model->delete($this->get('id'));


        $message = array(
            'data' => $data,
            'message' => 'DELETED!'
        );


        if($data)
        {
            $this->response($message, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be created'), 404);
        }
    }


    function get_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }


        $data = $this->Users_model->get_by_id($this->get('id'))->row();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


    function getsome_get()
    {
        $data = $this->Users_model->get_paged_list($this->get('limit'),$this->get('offset'))->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


    function getall_get()
    {
        $data = $this->Users_model->list_all()->result();


        if($data)
        {
            $this->response($data, 200);
        }
        else
        {
            $this->response(array('error' => 'Entity could not be found'), 404);
        }
    }


}
