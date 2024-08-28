<?php

namespace models;

class UserModel
{
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        die(var_dump($this->user));
        return $this->user;
    }

}