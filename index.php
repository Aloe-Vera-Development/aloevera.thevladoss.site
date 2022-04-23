<?php

require_once 'services/UsersService.php';

var_dump((new UsersService)->signIn(login: 'thevladoss', password: 'qwerty12345'));

