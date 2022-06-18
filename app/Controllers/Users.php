<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\User;

class Users extends BaseController
{
    public function index()
    {
        $user = new User();
        $info["users"] = $user->orderBy("id", "ASC")->findAll();
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");
        return view('main_view', $info);
    }

    public function create()
    {
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");
        return view('create-view', $info);
    }
    public function save()
    {
        $user = new User();
        $created_at = date("Y - m - d ");
        $info = [
            "name" => $_POST['name'],
            "document" => $_POST['document'],
            "password" => $_POST['password'],
            "phone" => $_POST['phone'],
            "gender" => $_POST['gender'],
            "birth_date" => $_POST['birth_date'],
            "eps_id" => $_POST['eps_id'],
            "role_id" => $_POST['role_id'],
            "created_at" => $created_at,
        ];
        $user->insert($info);

        $info["users"] = $user->orderBy("id", "ASC")->findAll();
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");

        return view('main_view', $info);
        // return $this->response->redirect(base_url('/home'));
    }
    public function delete($id = null)
    {
        $user = new User();
        $userToDelete = $user->where('id', $id)->first();
        $user->delete($userToDelete);
        return $this->response->redirect(base_url('home'));
    }
    public function edit($id = null)
    {
        $user = new User();
        $info["userToEdit"] = $user->where('id', $id)->first();
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");
        return view('edit-view', $info);
    }
    public function update()
    {
        $user = new User();
        $userToUpdate = [

            "name" => $_POST['name'],
            "document" => $_POST['document'],
            //"password" => $_POST['password'],
            "phone" => $_POST['phone'],
            "gender" => $_POST['gender'],
            "birth_date" => $_POST['birth_date'],
            "eps_id" => $_POST['eps_id'],
            "role_id" => $_POST['role_id'],
        ];
        $id = $_POST["id"];
        print_r($id);
        $user->update($id, $userToUpdate);

        $info["users"] = $user->orderBy("id", "ASC")->findAll();
        $info["header"] = view("templates/header");
        $info["footer"] = view("templates/footer");

        return view('main_view', $info);
    }
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
    public function login()
    {


        if ($this->request->getMethod() == 'post') {

            $rules = [
                'name' => 'required|min_length[6]|max_length[50]',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "name or Password don't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new User();
                $user = $model->where('name', $this->request->getVar('name'))->first();

                // Storing session values
                $this->setUserSession($user);
                // Redirecting to dashboard after login
                $info["users"] = $user->orderBy("id", "ASC")->findAll();
                $info["header"] = view("templates/header");
                $info["footer"] = view("templates/footer");

                return view('main_view', $info);
                //return redirect()->to(base_url('home'));
            }
        }
        return view('login-view');
    }

    public function profile()
    {

        $data = [];
        $model = new User();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return redirect()->to('home');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login-view');
    }
}
