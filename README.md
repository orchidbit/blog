## Laravel 8 Complete Blog

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Features
•	Pleasant UI themed after music and songs.
•	Music blog featuring the latest news in the music industry. Add, edit and delete blog posts.
•	Generate random songs to listen to with just the click of a button.
•	Listen to current top songs on the site.
•	Find new songs from my music reviews and playlists.


## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```
