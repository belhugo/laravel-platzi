# Laravel Platzi

Proyecto de aprendizaje del curso de Laravel en Platzi.

## Tecnologías

- Laravel 13
- PHP 8.3
- MariaDB
- Vite

## Instalación

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

## Desarrollo

Abre dos terminales:

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

App disponible en http://localhost:8000

## Licencia

Uso educativo.
