# Laravel 13 Docker Setup

## Stack

- Laravel 13
- PHP 8.3
- MySQL 8
- Redis
- Nginx

## Setup

```bash
git clone https://github.com/username/repo.git
cd repo

cp src/.env.example src/.env

docker compose up -d --build

docker exec -it laravel_app bash
composer install
php artisan key:generate
php artisan migrate
```
