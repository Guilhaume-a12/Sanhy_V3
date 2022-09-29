<?php

namespace App\Models\User;

class UserClass {
    
    public function __construct(
        private int $id_user,
        private string $name,
        private string $mail,
        private string $password,
        private string $role
    )
    {}

        /**
         * Get the value of id_user
         */ 
        public function getId_user()
        {
                return $this->id_user;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }
}