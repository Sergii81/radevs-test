
- php 8.1
- laravel 10.10


## Installation

- git clone https://github.com/Sergii81/radevs-test.git
- composer install
- set db credentials in .env
  - DB_CONNECTION=mysql
  - DB_HOST=localhost
  - DB_PORT=3306
  - DB_DATABASE=db_base_name
  - DB_USERNAME=db_user_name
  - DB_PASSWORD=db_password
- php artisan migrate
- php artisan app:setup (setup roles, permissions)
- php artisan db::seed
- admin credentials
  - login: admin@admin.com
  - password: admin
