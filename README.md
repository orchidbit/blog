## Laravel 8 Complete Blog
![image1](https://github.com/orchidbit/blog/assets/111306604/6540d2aa-344c-44c1-84ac-6192ed6a86cc)

## Requirements 📄
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Features 🎵 
•	Pleasant UI themed after music and songs. <br>
•	Music blog featuring the latest news in the music industry. <br>
•   Add, edit and delete blog posts. <br>
•	Listen to current top songs on the site. <br>
•	Generate random songs to listen to with just the click of a button. <br>
•   Listen to songs from Spotify as an embed on the site, and add songs to your Spotify liked. <br>
•	Find new songs from the music reviews and playlists page. <br>

![image2](https://github.com/orchidbit/blog/assets/111306604/eb37705e-18f7-4f8b-8738-3282d7221741)
![image3](https://github.com/orchidbit/blog/assets/111306604/a1e5ef59-0ddb-4180-8112-ea8f29c29456)

## Technologies Used 🖥️
• Visual Studio Code <br>
• XAMPP <br>
• Html, CSS, JavaScript <br>
• PHP, Blade <br>

## Usage 🛠️<br>
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

## Before starting 👩‍💻<br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file<br>
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

## Testing ⌨️
Use the following command to tests for the application: <br>
```
php artisan test
```

## Commands to compile laravel mix 📄
```
composer require laravel-frontend-presets/tailwindcss --dev
php artisan ui tailwindcss --auth
npm remove laravel-mix
npm install laravel-mix --save-dev
npm install cross-env --save-dev
npm run watch
```
