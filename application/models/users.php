<?php

class Users extends CI_Model
{

    public function idUser($user, $pass)
    {
        $this->load->library('rb');

        $validated = false;
        $validatedU = false;
        $validatedP = false;

        $username = $user;
        $password = $pass;

        $userObject = R::findOne('users', ' username = ?', array($username));


        if ($userObject) {
            $arrays = $userObject->export();

            if ($arrays['username'] === $username) {
                $validatedU = true;
            }
            if ($arrays['password'] === $password) {
                $validatedP = true;
            }
            if ($validatedU && $validatedP == true) {
                $validated = true;
                return $validated;
            }

        }

    }

    public function create()
    {
        $this->load->library('rb');
        $this->load->helper('utils');

        $created = false;
        $username = $_POST['username'];

        $userObject = R::findOne('users', ' username = ?', array($username));

        if ($userObject) {

            return $created;

        } else {

            $user = R::dispense('users');

            foreach($_POST as $key => $value)
            {
                $user->$key = sanitizeString($value);
            }

            R::begin();
            try {
                R::store($user);
                R::commit();
                $created = true;
            }
            catch (Exception $e) {
                R::rollback();
                $created = false;
                echo 'the user was not stored in the database';
            }
            return $created;
        }

    }

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

        return $arrays;

    }

    public function update()
    {
        $this->load->library('rb');
        $this->load->helper('utils');

        $userupdate = R::dispense('users');

        $userupdate->import($_POST);

        $user = R::load('users', $userupdate->id);

        foreach($_POST as $key => $value)
        {
            if (!empty($value)){
                $user->$key = sanitizeString($value);
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

    }

}