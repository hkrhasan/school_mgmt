<?php

class Login extends Controller
{
    function index()
    {
        $errors = array();

        if (count($_POST) > 0) {
            $user = new User();

            if ($row = $user->where('username', $_POST['username'])) {

                $row = $row[0];
                if (password_verify($_POST['password'], $row->password)) {
                    # code...
                    Auth::authenticate($row);
                    $this->redirect('/');
                } else {
                    $errors['password'] = "Invalid Credentials!";
                }
            } else {
                $errors['username'] = "Incorrect username!";
            }
        }

        $this->view('login', [
            'errors' => $errors,
        ]);
    }
}
