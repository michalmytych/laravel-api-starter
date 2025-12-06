<img width="4344" height="658" alt="Laravel React Starter Kit Billboard" src="https://github.com/user-attachments/assets/ae559144-9dd8-4852-884f-b1af782940fc" />

# Simple Laravel Sanctum API Starter prepared for SPA Applications.

Kept simple.

## Features

* Laravel Sail (MySQL, Redis)
* Sanctum Auth with basic Controllers/Api/Auth/AuthController which handles registration, login and logout

### Endpoints
```bash
  GET|HEAD   sanctum/csrf-cookie ... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
  POST       api/auth/login ........ Api\Auth\AuthController@login
  POST       api/auth/logout ....... Api\Auth\AuthController@logout
  POST       api/auth/register ..... Api\Auth\AuthController@register  
  GET|HEAD   api/user ..............  
  GET|HEAD   api/ping ..............
  GET|HEAD   storage/{path} ........ storage.local
  GET|HEAD   up ....................
```

### Setup

This project is a __template__. When you clone this repository, change the name of directory. Use unique name for your app, otherwise containers will be listed in Docker under ```laravel-api-starter``` name which will be problematic when you will be using this template for another project.

```bash
cp .env.example .env
docker compose up -d
# In laravel.test container
docker compose exec laravel.test bash
php artisan key:generate
php artisan migrate:fresh
```
App should be working on: http://localhost:8000/

You can find React SPA for this starter [here.](https://github.com/michalmytych/react-laravel-spa-starter)
