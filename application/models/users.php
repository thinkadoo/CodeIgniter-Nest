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

    public function create($userin, $passin, $firstnamein, $lastnamein, $emailin)
    {
        $this->load->library('rb');

        $created = false;
        $username = $userin;

        $userObject = R::findOne('users', ' username = ?', array($username));

        if ($userObject) {

            return $created;

        } else {

            $user = R::dispense('users');

            $user->username = $userin;
            $user->password = $passin;
            $user->firstname = $firstnamein;
            $user->lastname = $lastnamein;
            $user->email = $emailin;

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

        $userupdate = R::dispense('users');

        $userupdate->import($_POST);

        $user = R::load('users', $userupdate->id);

        if ($userupdate["username"]) {
            $user->username = ($userupdate["username"]);
        }
        if ($userupdate["password"]) {
            $user->password = ($userupdate["password"]);
        }
        if ($userupdate["email"]) {
            $user->email = ($userupdate["email"]);
        }
        if ($userupdate["firstname"]) {
            $user->firstname = ($userupdate["firstname"]);
        }
        if ($userupdate["lastname"]) {
            $user->lastname = ($userupdate["lastname"]);
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