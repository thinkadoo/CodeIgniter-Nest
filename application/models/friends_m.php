<?php

class Friends_m extends CI_Model
{

    public function create($newfriendid)
    {
        //echo '<pre>'.print_r($newfriendid, true).'</pre>';

        $this->load->model('Users');
        $this->load->library('rb');

        $created = false;

        $newfriend = R::dispense('friends');

        $user = $this->session->userdata('user_name');
        $friendObj = $this->Users->getById($newfriendid);
        $friend = $friendObj['username'];

        $newfriend->user = $user;
        $newfriend->friend = $friend;

        //echo '<pre>'.print_r($newfriend, true).'</pre>';

        //die();

        R::begin();
        try {
            R::store($newfriend);
            R::commit();
            $created = true;
        }
        catch (Exception $e) {
            print_r($e);
            R::rollback();
            $created = false;
            echo 'your new friend was not stored in the database';
        }

        return $friendObj;

    }

/*
    public function getById($id)
    {
        $id = intval($id);

        $this->load->library('rb');

        $user = R::load('users', $id);

        return $user->export();

    }

    public function getAll()
    {

        $this->load->library('rb');

        $all = R::find('users');

        $arrays = R::exportAll($all);

        //echo '<pre>'.print_r($arrays, true).'</pre>';

        return $arrays;

    }

    public function update()
    {
        $this->load->library('rb');
        $this->load->helper('utils');
        $this->load->helper('htmlpurifier');

        $userupdate = R::dispense('users');

        $userupdate->import($_POST);

        $user = R::load('users', $userupdate->id);

        foreach($_POST as $key => $value)
        {
            if (!empty($value)){
                $user->$key = purify($value);
            }
        }

        R::begin();
        try {
            R::store($user);
            R::commit();
        }
        catch (Exception $e) {
            R::rollback();
            echo 'the user was not stored in the database';
        }

        return $userupdate->export();

    }

    public function delete($id)
    {
        $this->load->library('rb');

        $user = R::load('users', $id);

        R::trash($user);

    }*/

}