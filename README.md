# login_system_laravel
Consiste en una prueba simple de registro, inicio de sesión y visualización de datos del usuario, utilizando laravel php y vue 3

# Requisitos previos
Antes de comenzar, es necesario tener instalados los siguientes componentes en su sistema:
- PHP >= 8.1 con extensiones requeridas:
- pdo
- sqlite
- fileinfo
- Composer para gestionar dependencias de PHP.
- Node.js (recomendado: v16 o superior) y npm.

# Instrucciones de instalación
1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
2. **Instalar dependencias de PHP**
   ```bash
   composer install
3. **Instalar dependencias de Node.js**
   ```bash
   npm install
4. **Agregar el archivo .env**
   - Copiar el archivo .env.example y renómbrarlo como .env:
   ```bash
   cp .env.example .env
5. **Configurar el archivo .env**
   - Abrir el archivo .env y ajustar la configuración de la base de datos:
   ```bash
   DB_CONNECTION=sqlite
   DB_DATABASE=/ruta/absoluta/a/tu/proyecto/database/database.sqlite
6. **Crear la base de datos SQLite**
   - Navegar al directorio database/ dentro del proyecto.
   - Crear un archivo vacío llamado database.sqlite.
7. **Ejecutar migraciones**
   ```bash
   php artisan migrate
8. **Generar la clave de la aplicacion (importante)**
   ```bash
   php artisan key:generate
9. **Construir los assets del frontend**
   ```bash
   npm run build
10. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
```
Finalmente, dirigirse a http://127.0.0.1:8000 y probar las funcionalidad implementadas.
   

