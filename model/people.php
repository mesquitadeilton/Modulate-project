<?php
    class people {
        private $name;
        private $email;
        private $password;

        function __construct($name, $email, $password) {
            $this->set_name($name);
            $this->set_email($email);
            $this->set_password($password);
        }

        function set_name($name) {
            $this->name = $name;
        }

        function set_email($email) {
            $this->email = $email;
        }

        function set_password($password) {
            $this->password = $password;
        }

        function get_name() {
            return $this->name;
        }

        function get_email() {
            return $this->email;
        }

        function get_password() {
            return $this->password;
        }
    }
?>