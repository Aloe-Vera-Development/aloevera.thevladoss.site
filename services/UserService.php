<?php

require_once '/home/users/o/osinvladislav/domains/aloevera.thevladoss.site/services/const.php';
require_once serverPath.'/models/User.php';
require_once serverPath.'/models/UserPlant.php';
require_once serverPath.'/models/PlantVariety.php';
require_once serverPath.'/models/Plant.php';
require_once serverPath.'/models/PlantType.php';

class UserService
{

    private function _queryToDB(string $sql): bool|mysqli_result
    {

        $link = mysqli_connect(servername, username, password, database);

        return mysqli_query($link, $sql);
    }

    public function signUp(string $name, string $last_name, string $email, string $login, string $password, string $photo, string $birthday, string $city): User|bool
    {
        $res = $this->_queryToDB("INSERT INTO `users`(`name`, `last_name`, `email`, `login`, `password`, `photo`, `birthday`, `city`) VALUES ('$name','$last_name','$email','$login','$password','$photo','$birthday','$city')");

        if ($res) {
            return $this->signIn(login: $login, password: $password, remember: 'on');
        } else {
            return false;
        }
    }

    public function signIn(string $login, string $password, string $remember): bool|User
    {
        $res = $this->_queryToDB("SELECT * FROM `users` WHERE (`login` = '$login' OR `email` = '$login') AND `password` = '$password'");
        if (!$res) {
            return false;
        } else {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                $user = $user_;
            }

            var_dump($user);

            if ($user != []) {
                setcookie('id', $user['id'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('name', $user['name'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('last_name', $user['last_name'], ($remember == 'on') ? time()+60*60*24*30 : 0);
                setcookie('email', $user['email'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('login', $user['login'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('photo', $user['photo'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('birthday', $user['birthday'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('city', $user['city'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                setcookie('telegram_id', $user['telegram_id'], ($remember == 'on') ? time()+60*60*24*30 : 0, '/');
                return new User(id: $user['id'], name: $user['name'], last_name: $user['last_name'], email: $user['email'], login: $user['login'], photo: $user['photo'], birthday: $user['birthday'], city: $user['city'], telegram_id: $user['telegram_id']);
            } else {
                return false;
            }
        }
    }

    public function signOut(): bool
    {
        setcookie('id', '', -1, '/');
        setcookie('name', '', -1, '/');
        setcookie('last_name', '', -1, '/');
        setcookie('email', '', -1, '/');
        setcookie('login', '', -1, '/');
        setcookie('photo', '', -1, '/');
        setcookie('birthday', '', -1, '/');
        setcookie('city', '', -1, '/');
        setcookie('telegram_id', '', -1, '/');
        return true;
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
            if ($plantType != []) {
                return new PlantType(name: $plantType['name']);
            } else {
                return false;
            }
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
            if ($plant != []) {
                return new Plant(name: $plant['name'], latin_name: $plant['latin_name'], plantType: $this->getPlantType($plant['type']), description: $plant['description'], photo: $plant['photo']);
            } else {
                return false;
            }
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
            if ($plantVariety != []) {
                return new PlantVariety(name: $plantVariety['name'], plant: $this->getPlant($plantVariety['plant_id']), irrigation_period: $plantVariety['irrigation_period'], germination_period: $plantVariety['germination_period'], fertilizing_period: $plantVariety['fertilizing_period'], growth_temp: $plantVariety['growth_temp']);
            } else {
                return false;
            }
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
            if ($userPlants != []) {
                return $userPlants;
            } else {
                return false;
            }
        }
    }
}