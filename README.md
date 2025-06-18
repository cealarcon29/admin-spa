# 🧠 Microproyecto 1 - Desarrollo de Aplicaciones Web

Este proyecto es una SPA (Single Page Application) desarrollada como parte del Microproyecto 1 de la asignatura **Electiva Desarrollo de Aplicaciones Web** en la Universidad del Cauca.

---

## 🚀 Tecnologías usadas

- **Frontend**: React + Vite + Tailwind CSS  
- **Backend**: Laravel 11 (API REST)  
- **Base de Datos**: MySQL  
- **Autenticación**: Laravel Sanctum + RSA  
- **Validaciones**: Frontend y Backend  
- **Control de Acceso**: Por roles, incluyendo Super Administrador limitado

---

## 🔐 Funcionalidades principales

- Inicio de sesión cifrado (RSA 256 bits)
- Gestión de Usuarios con foto, validaciones, CRUD y roles
- Gestión de Tipos de Documento con fecha, usuario y estado lógico (activo/inactivo)
- Gestión de Roles con restricciones
- Vista de bienvenida con menú horizontal
- Modales para formularios
- Acceso controlado a interfaces por autenticación
- Lógica de reactivación de elementos inactivos

---

## 📦 Instalación y ejecución

### Backend (Laravel)

```bash
cd backend-laravel
composer install
cp .env.example .env
# Configura la conexión a tu base de datos en .env
php artisan migrate --seed
php artisan serve
