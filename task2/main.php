<?php
declare(strict_types=1);

require "../task1/user.php";

class Mailer
{
  function send(string $to, string $message): void
  {
    echo "Sending email to " . $to . ":" . $message . "";
  }
}

class UserNotifier
{
  private Mailer $mailer;

  public function __construct(Mailer $mailer)
  {
    $this->mailer = $mailer;
  }
  function notify(User $user): void
  {
    $newMessage = "Hello," . $user->email . ", you have a new notification!";
    $this->mailer->send($user->email, $newMessage);
  }
}

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
