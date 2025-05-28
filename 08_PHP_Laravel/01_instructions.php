<?php
  /*
    To install the Laravel, you need to have previously installed the PHP and Composer at your pc
    //Run the command to create a laravel project: composer create-project --prefer-dist laravel/laravel name-of-project 7.2
  */
  /*
    Into your project:
    app > Contains all program logic files and folders
    config > Configuration files
    database > Files to create a database
    resources > All frontend files
    routes > You can define all routes/url's of your project (web.php), or a creation of API (api.php)

  */
  /*
    To run the program into the directory that you have created before:
    php artisan serve = php -S localhost:8000 -t public

    If it causes an error: see if the php.ini is with extension=fileinfo enabled, so, use the command composer install
  */
  /*
      Models and Databases
      Create a file at database directory called database.sqlite
      So, enter at the config directory an find the database.php file, it will have the database configurations
      At the project root, at the .env file, open it and if you will use the sqlite, the database configuration must be like that:
      
      DB_CONNECTION=sqlite
      # DB_HOST=127.0.0.1
      # DB_PORT=3306
      # DB_DATABASE=laravel
      # DB_USERNAME=root
      # DB_PASSWORD=
  */
  /*
      Migrations

      php artisan make:migration create_table_series
      //See all migrations in: database/migrations

      //To see more: https://laravel.com/docs/12.x/migrations#main-content
      php artisan migrate

      To revert:
      php artisan migrate:rollback

      If you want to create a class and the migration at the same time
      php artisan make:model Season -m
  */
?>