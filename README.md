Welcome to PHPLottery System. 

PHP Lottery System is an easy to use lottery system which requires almost no knowledge with progamming. 
It is based on SLIM PHP Framework, Sentry as Authentication Library, BackGrid as DataGrid and Twitter Bootstrap
as its front end framework. It uses cron job to schedule the time of draws and it automatically calculates the
winning price based on how many people won the specific draw.

System Requirements:

1. PHP 5.3 +
2. MYSQL 5
3. Apache 2.4 +
4. Patience

Configuration

```php
// EDIT configs/database.php and application.php

define('DRIVER','mysql');
define('DBHOST','localhost');
define('DBNAME','lotto');
define('DBUSER','root');
define('DBPASS','');

define('BASE_URL','http://lotto');
define('ASSETS_URL','http://lotto/assets');
```

Cron:

Create a cron jobs and point it to cron.php

Database:

Just import the dump file.

/managers/login 
Email: testing@test.com
Password: test

Any questions, please conctact me at johndavedecano@gmail.com
