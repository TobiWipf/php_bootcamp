✅ Task 2 – OOP Composition (Detailed Requirements)

1. Class: Mailer
   Method:
   send(string $to, string $message): void

Implementation:
Just print:
Sending email to [email]: [message]

2. Class: UserNotifier
   Constructor:
   Accepts a Mailer instance and stores it as a private property.

Method:
notify(User $user): void
Constructs a message like:
"Hello [name], you have a new notification!"
Then calls Mailer->send($user->email, $message)

3. Testing
   Create a Mailer instance

Create a UserNotifier and inject the Mailer

Create a few User objects

Call notify() on each one
