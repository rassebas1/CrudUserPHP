<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function index()
    {

        $session = session();
        if ($session->get('logged_in') == true) {
            return view("main_view");
        } else
            return view("login-view");
    }
    public function home()
    {

        $session = session();
        echo "Welcome back, " . $session->get('username');
        $user = new User();
        $info["users"] = $user->orderBy("id", "ASC")->findAll();
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");
        return view('main_view', $info);
    }
   
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
