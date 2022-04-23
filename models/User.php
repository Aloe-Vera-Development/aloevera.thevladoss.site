<?php

class User
{
    public int $id;
    public string $name;
    public string $last_name;
    public string $email;
    public string $login;
    public string $photo;
    public string $telegram_id;

    public function __construct($id, $name, $last_name, $email, $login, $photo, $telegram_id) {
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->login = $login;
        $this->photo = $photo;
        $this->telegram_id = $telegram_id;
    }
}