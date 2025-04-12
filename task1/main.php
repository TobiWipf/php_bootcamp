<?php
declare(strict_types=1);
class User
{

  public function __construct(public string $name, public string $email)
  {
  }

  function greet()
  {
    return "Hello, " . $this->name . " how are you?";
  }
}


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