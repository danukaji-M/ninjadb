<?php

require 'vendor/autoload.php';

use Ninja\Core\Orm;
use Database\User;
use PDO;

// Create a new PDO instance
$pdo = new PDO('mysql:host=localhost;dbname=ninja_db', 'test', 'Danu2003@');

// Create a new User instance
$user = new User();
$user->id = 1; // This will be auto-incremented, so you can omit this
$user->name = 'John Doe';
$user->email = 'john.doe@example.com';
$user->password = password_hash('password123', PASSWORD_BCRYPT);

// Save the user using the ORM
$orm = new Orm($pdo);
$orm->save($user);

echo "User saved successfully!";