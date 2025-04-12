<?php
declare(strict_types=1);
namespace App;

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
;