<?php
require 'vendor/autoload.php';

use App\User;
use App\Mailer;
use App\UserNotifier;

$testUsers = [
  new User("John", "john@example.com"),
  new User("Jane", "jane@example.com"),
  new User("Jim", "jim@gmail.com"),
];

$mailer = new Mailer();
$userNotifier = new UserNotifier($mailer);

foreach ($testUsers as $user) {
  $userNotifier->notify($user);
}
