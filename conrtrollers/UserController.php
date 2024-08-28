<?php

namespace conrtrollers;

use models\UserModel;

class UserController
{
    public function __construct()
    {
        require 'models/UserModel.php';
        $user = new UserModel('Stephan');
    }

    public function index()
    {

        require 'views/user.view.php';
    }
}