<?php

/**
 * User model
 */

class User extends Model
{
    protected $allowedFields = ['username', 'phone', 'email', 'password', 'date', 'user_id', 'school_id'];
    protected $beforeInsert = ['generate_id', 'generate_school_id', 'hash_password'];

    public function validate($DATA)
    {
        $this->errors = array();

        // check privacy checkbox
        if (!isset($DATA['agree'])) {
            $this->errors['agree'] = 'You must agree to the terms and conditions';
        }

        // check for username
        if (empty($DATA['username'])) {
            $this->errors['username'] = 'Username is required';
        }

        // check username taken
        if ($this->where('username', $DATA['username'])) {
            $this->errors['username'] = 'this name is already taken please try with different name';
        }

        // check for email
        if (empty($DATA['email'])) {
            $this->errors['email'] = 'Email is required';
        } else if (!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Email is invalid';
        }

        // check email exist
        if ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = 'Email already exists';
        }

        // check for password
        if (empty($DATA['password'])) {
            $this->errors['password'] = 'Password is required';
        } else if (strlen($DATA['password']) < 8) {
            $this->errors['password'] = 'Password must be at least 8 characters';
        } else if (!preg_match('/\d/', $DATA['password'])) {
            $this->errors['password'] = 'Password must contain at least one number';
        } else if (!preg_match('/[A-Z]/', $DATA['password'])) {
            $this->errors['password'] = 'Password must contain at least one uppercase letter';
        } else if (!preg_match('/[a-z]/', $DATA['password'])) {
            $this->errors['password'] = 'Password must contain at least one lowercase letter';
        } else if (!preg_match('/[^A-Za-z0-9]/', $DATA['password'])) {
            $this->errors['password'] = 'Password must contain at least one symbol';
        }

        if (count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function generate_id($data)
    {
        $data['user_id'] = $this->random_string(60);
        return $data;
    }

    public function generate_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    private function random_string($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length = strlen($characters);
        $random_text = '';

        for ($i = 0; $i < $length; $i++) {
            $random_text .= $characters[rand(0, $characters_length - 1)];
        }

        return $random_text;
    }
}
