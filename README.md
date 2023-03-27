<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Instalación

Ejecutar los siguientes pasos 

- Verificar que tenga  [Node-v16.14.2](https://nodejs.org/en)

- composer install
- npm install
- crear base de datos con las especificaciones den archivo .env
- php artisan migrate
- php artisan db:seed --class=PermissionTableSeeder
- php artisan db:seed --class=CreateAdminUserSeeder 
- npm run dev
- aceder  mediante la url http://app-uidigital-posts.test/


opcional para la creación de base de datos se adjunta archivo de script de base de datos app-uidigital-posts.sql