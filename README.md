
<p align="center">
  <a href="https://www.youtube.com/watch?v=yIpxrDfX6ek" target="_blank">
    <img src="https://pnganime.com/images/download/luffy-gear-5-colored-transparent-png" width="400" alt="Logo">
  </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 📖 Proyecto Biblioteca (Laravel 12)

Este proyecto es un **sistema de gestión de biblioteca** construido con Laravel 12.  
Incluye autenticación, panel administrativo, manejo de libros y usuarios.  

---

## 🚀 Requisitos previos

Asegúrate de tener instalados:

- [PHP ^8.2](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL o MariaDB](https://www.mysql.com/)
- [Node.js + NPM](https://nodejs.org/)
- [Git](https://git-scm.com/)

---
## ⚙️ Instalación Automatica
- Iniciar archivo bash "start.sh"
- chmod +x setup.sh
- ./setup.sh
---
## ⚙️ Instalación en local

Clonar el repositorio:

```bash
git clone https://github.com/TryingT0Dev/TSI-Project-web.git
cd TSI-Project-web

composer install
npm install && npm run build
cp .env.example .env

Inicial XAMPP apache server && MySQL

Editar el archivo env con credenciales locales

php artisan migrate --seed
php artisan key:generate
php artisan serve
npm run dev
npm run build
php artisan migrate:fresh --seed



Email: test@example.com
Password: password
