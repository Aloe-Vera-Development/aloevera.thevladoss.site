<?php

require_once 'services/const.php';

class UsersService
{

    private function _queryToDB(string $sql): bool|mysqli_result
    {

        $link = mysqli_connect(servername, username, password, database);

        return mysqli_query($link, $sql);
    }

    public function signUp(string $name, string $last_name, string $email, string $login, string $password): mysqli_result|bool
    {
        return $this->_queryToDB("INSERT INTO `users`(`name`, `last_name`, `email`, `login`, `password`) VALUES ('$name','$last_name','$email','$login','$password')");
    }

    public function signIn(string $login, string $password): bool|mysqli_result
    {
        return $this->_queryToDB("SELECT * FROM `users` WHERE (`login` = '$login' OR `email` = '$login') AND `password` = '$password'");
    }
}