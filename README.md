# Laravel Platzi

Learning project from Platzi's Laravel course.

## Stack

- Laravel 13
- PHP 8.3
- MariaDB
- Vite

## Setup

```bash
git clone https://github.com/tu-usuario/laravel-platzi.git
cd laravel-platzi

composer install
npm install

cp .env.example .env
php artisan key:generate

mysql -u root -e "CREATE DATABASE laravel_platzi;"
php artisan migrate

npm run build
```

## Running locally

Open two terminals:

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

App running at http://localhost:8000

## License

For learning purposes only.
