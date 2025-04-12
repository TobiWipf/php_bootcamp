<?php
declare(strict_types=1);
namespace App;

class Mailer
{
  function send(string $to, string $message): void
  {
    echo "Sending email to " . $to . ":" . $message . "";
  }
}
