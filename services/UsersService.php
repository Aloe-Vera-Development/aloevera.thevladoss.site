<?php

require_once 'services/const.php';
require_once 'models/User.php';
require_once 'models/UserPlant.php';
require_once 'models/PlantVariety.php';
require_once 'models/Plant.php';
require_once 'models/PlantType.php';

class UsersService
{

    private function _queryToDB(string $sql): bool|mysqli_result
    {

        $link = mysqli_connect(servername, username, password, database);

        return mysqli_query($link, $sql);
    }

    public function signUp(string $name, string $last_name, string $email, string $login, string $password, string $photo): mysqli_result|bool
    {
        return $this->_queryToDB("INSERT INTO `users`(`name`, `last_name`, `email`, `login`, `password`, `photo`) VALUES ('$name','$last_name','$email','$login','$password','$photo')");
    }

    public function signIn(string $login, string $password): bool|User
    {
        $res = $this->_queryToDB("SELECT * FROM `users` WHERE (`login` = '$login' OR `email` = '$login') AND `password` = '$password'");
        if (!$res) {
            return false;
        } else {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                $user = $user_;
            }
            return new User(id: $user['id'], name: $user['name'], last_name: $user['last_name'], email: $user['email'], login: $user['login'], photo: $user['photo'], telegram_id: $user['telegram_id']);
        }
    }

    public function getPlantType($id): PlantType|bool
    {
        $res = $this->_queryToDB("SELECT * FROM `plant_types` WHERE `id`='$id'");
        if (!$res) {
            return false;
        } else {
            $plantType = [];
            while ($plant_type = mysqli_fetch_array($res)) {
                $plantType = $plant_type;
            }
            return new PlantType(name: $plantType['name']);
        }
    }

    public function getPlant($id): Plant|bool
    {
        $res = $this->_queryToDB("SELECT * FROM `plants` WHERE `id`='$id'");
        if (!$res) {
            return false;
        } else {
            $plant = [];
            while ($plant_ = mysqli_fetch_array($res)) {
                $plant = $plant_;
            }
            return new Plant(name: $plant['name'], latin_name: $plant['latin_name'], plantType: $this->getPlantType($plant['type']), description: $plant['description'], photo: $plant['photo']);
        }
    }

    public function getPlantVariety($id): bool|PlantVariety
    {
        $res = $this->_queryToDB("SELECT * FROM `plants_variety` WHERE `id`='$id'");
        if (!$res) {
            return false;
        } else {
            $plantVariety = [];
            while ($plant_variety = mysqli_fetch_array($res)) {
                $plantVariety = $plant_variety;
            }
            return new PlantVariety(name: $plantVariety['name'], plant: $this->getPlant($plantVariety['plant_id']), irrigation_period: $plantVariety['irrigation_period'], germination_period: $plantVariety['germination_period'], fertilizing_period: $plantVariety['fertilizing_period'], growth_temp: $plantVariety['growth_temp']);
        }
    }

    public function getMyPlants(int $id): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `user_plants` WHERE `user_id`='$id'");
        if (!$res) {
            return false;
        } else {
            $userPlants = [];
            while ($user_plant = mysqli_fetch_array($res)) {
                $userPlant = $user_plant;
                $userPlants[] = new UserPlant(name: $userPlant['name'], plantVariety: $this->getPlantVariety($userPlant['plant_id']), datetime: DateTime::createFromFormat('Y-m-d H:i:s', $userPlant['datetime']));
            }
            return $userPlants;
        }
    }
}