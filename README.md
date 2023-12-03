# ToLet_Site

Requirements:

1.PHP version-^7.3|^8.0, Laravel version-^8.75
2.composer
3.phpMyAdmin

To Run The Project:

1. Start Apache and MySQL in XAMPP.
2. Create a DB named 'to_let_bd' in phpMyAdmin and inside it, import the 'to_let_bd.sql' file from the folder DB.
3. Clone the project.
4. Go inside the project folder (ToLet_Site) and run the following commands one by one in git bash / cmd:
   1. composer install
   2. cp .env.example .env /rename (.env.example) to (.env) if you face any error with the command.
   3. Go inside the .env file and change the DB name to 'to_let_bd'.
   4. php artisan key:generate
   5. php artisan serve

Login credential:

Username: admin1 password: admin#1

Project Demo:

https://github.com/talha-51/ToLet_Site/assets/77994433/2a8133fd-973a-4d75-a331-98c0e279935e
