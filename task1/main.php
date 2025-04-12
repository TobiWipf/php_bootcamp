<?php
declare(strict_types=1);

require "user.php";

function filterEmails($users)
{
  $filteredUsers = [];
  foreach ($users as $user) {
    if (str_contains($user->email, "example.com")) {
      $filteredUsers[] = $user;
    }
  }
  return $filteredUsers;
}
;

$testUsers = [
  new User("John", "john@example.com"),
  new User("Jane", "jane@example.com"),
  new User("Jim", "jim@gmail.com"),
];


function test($users)
{
  $filteredUsers = filterEmails($users);
  echo "Filtered users: " . count($filteredUsers) . "\n";
  foreach ($filteredUsers as $user) {
    echo $user->greet() . "\n";
  }
}

test($testUsers);