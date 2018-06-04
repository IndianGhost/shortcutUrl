# Welcome to Shortcut URL ![version1.0](https://img.shields.io/badge/version-1.0-green.svg) [![Packagist](https://img.shields.io/packagist/l/doctrine/orm.svg)](https://github.com/IndianGhost/shortcutUrl/blob/master/LICENSE)

You can use this project (mini website) to shortcut URL adresses, it's a classic project that helps beginners to discover a new framework (laravel in this case).

# Install
Download or clone the project on your localhost (or server) by :
## Git
```
git clone https://github.com/IndianGhost/shortcutUrl.git
```
## Laravel
create the file ".env" (You will not find it by default on the project), copy & paste the content of the file ".env.example" into ".env" and configure the parameters of the database, here's my example :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shortcut_url
DB_USERNAME=root
DB_PASSWORD=null
```
On command prompt generate the app key by :
```
php artisan key:generate
```
The last command is to migrate the database :
```
php artisan migrate
```
Now that you did the migration, everything's alright. Don't you trust me?
Ok, let's run the server ;)
```
php artisan serve
```

# Inteded users
Generally anybody can use this project but I think it will be helpful for software students or beginner php developers (I hope so).

# Demonstration
[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/cs6Cw1Vxtaw/0.jpg)](https://www.youtube.com/watch?v=cs6Cw1Vxtaw)

# Copyright and license
Copyright 2018 Achraf BELLAALI **Shortcut URL** is a free open-source project. The code is released under [The MIT LICENSE](https://github.com/IndianGhost/shortcutUrl/blob/master/LICENSE) you can do whatever you want with it !

# Support My development
If you found it helpful, you can support me to develop new projects By :
[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/achrafbellaali)
