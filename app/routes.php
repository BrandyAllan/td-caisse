<?php
require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/services/Validator.php';
require_once __DIR__ . '/services/UserService.php';
require_once __DIR__ . '/repositories/UserRepository.php';

Flight::route('GET /', ['AuthController', 'showRegister']);
Flight::route('POST /register', ['AuthController', 'postRegister']);
Flight::route('GET /login', ['AuthController', 'showLogin']);
Flight::route('POST /login', ['AuthController', 'postLogin']);
Flight::route('GET /logout', ['AuthController', 'showLogin']);
Flight::route('POST /api/validate/register', ['AuthController', 'validateRegisterAjax']);
Flight::route('POST /api/validate/login', ['AuthController', 'validateLoginAjax']);

