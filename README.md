Build Instructions

----------------------------------------------------------------------------------
Laravel Application

To set up application, follow these steps:

1. In the 'test' folder, using the console, run the command 'npm install'
2. In the console, run the command 'composer install'

----------------------------------------------------------------------------------
Setting up Database

1.Open MySQL Workbench
2.Create a new schema
3.name it 'projectBizarre'
4.Give it a default collation of 'utf8 - default collation'
5.Click Apply twice

----------------------------------------------------------------------------------
To send data to datasbe
1. In the 'test' folder, using the console, run the command 'php artisan migrate'
2. in the console, run the command 'php artisan db:seed'
3. if these no proceed, update these in the .env folder to match your system
----------------------------------------------------------------------------------

To run the application:
1. in the console, run the command 'php artisan serve'
2. in browser access http://localhost:8000

