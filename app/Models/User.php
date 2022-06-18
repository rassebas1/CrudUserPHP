<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table      = 'tb_users';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $paswword = 'password';
    protected $allowedFields = ["name","password", "document", "birth_date", "phone", "eps_id", "role_id", "gender"];
   
}
