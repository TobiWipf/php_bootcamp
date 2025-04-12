✅ Task 3 – Composer Setup & Autoloading
You’ll set up a real PHP project structure using Composer and PSR-4 autoloading.

Step-by-Step Instructions

1. Project Structure
   Create a folder like this:

pgsql
Copy
Edit
project-root/
├── composer.json
├── src/
│ ├── Mailer.php
│ ├── User.php
│ └── UserNotifier.php
├── test.php 2. Initialize Composer
From project-root/, run:

bash
Copy
Edit
composer init
Package name: anything

Description: optional

Author: optional

Minimum stability: dev

License: MIT

Then define autoloading:

bash
Copy
Edit
composer dump-autoload
Or manually add this to composer.json:

json
Copy
Edit
"autoload": {
"psr-4": {
"App\\": "src/"
}
}
Then run:

bash
Copy
Edit
composer dump-autoload 3. Update Your Classes
Make sure each class is under the App namespace.

Example: src/User.php

php
Copy
Edit

<?php
namespace App;

class User {
    // ...
}
Update Mailer.php, UserNotifier.php similarly.

4. In test.php
php
Copy
Edit
<?php
require 'vendor/autoload.php';

use App\User;
use App\Mailer;
use App\UserNotifier;

// same test logic
Let me know when you’ve got this running and we’ll jump into the WordPress part.
