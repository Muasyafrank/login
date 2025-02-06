1. use index.js,db.php,login.php and signup.php the other files are for testing

2. first install php and php-mysql extension in your system
# for linux
sudo apt install php

# mysql extensions
sudo apt update
sudo apt install php8.3-mysql

# for windos use cmd
winget install php
php -v


3. Confugure your database figures well in the db.php file and use the user.db file to create the database

4. navigate to your directory which contains the files open terminal and paste this command to run the server
php -S localhost:8000

5. open your browser then paste this url to test the app 
http://localhost:8000/index.php


