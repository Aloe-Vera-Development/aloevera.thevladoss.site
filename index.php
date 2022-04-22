<?php

require_once 'services/UsersService.php';

$res = (new UsersService)->signIn('thevladoss', 'qwerty12345');

if (!$res) {
    echo 'error';
} else {
    while ($row = mysqli_fetch_array($res)) {
        var_dump($row);
    }
}