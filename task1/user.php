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