# API de Información de Bandas Musicales

La **API de Información de Bandas Musicales** es una aplicación desarrollada en Laravel que te permite gestionar y acceder a detalles importantes sobre diferentes bandas o grupos musicales. Con esta API, puedes obtener información sobre la discografía de una banda, su historia, miembros actuales y más.

## Características

- **Información Detallada:** Accede a detalles completos sobre bandas o grupos musicales, como discografía, historia y miembros.
- **Interfaz Intuitiva:** La API ofrece puntos finales (endpoints) bien definidos para facilitar el acceso a la información.
- **Fácil Integración:** Puedes integrar fácilmente esta API en aplicaciones web y móviles.
- **Base de Datos Eficiente:** Utiliza una base de datos eficiente para almacenar y gestionar la información de las bandas.

## Requisitos del Sistema

- PHP >= 8.1
- Composer
- MySQL u otro sistema de gestión de bases de datos compatible

## Instalación

1. **Clonar el Repositorio:**
   
   Clona este repositorio en tu máquina local:
   ```bash
   git clone https://github.com/ginogalarzac/music-story-api

2. **Navegar a la Carpeta del Proyecto:**\
    ```bash
    cd music-story-api

3. **Instala las dependencias utilizando Composer:**
    ```bash
    composer install

4. **Configurar la Base de Datos:**

    Crea un archivo .env y configura la conexión a la base de datos. Puedes copiar el contenido de .env.example y ajustar los valores según tu entorno.

5. **Generar Clave de Aplicación:**
    ```bash
    php artisan key:generate

6. **Ejecutar Migraciones:**

    Ejecuta las migraciones para crear las tablas de la base de datos:
    ```bash
    php artisan migrate

7. Iniciar el Servidor de Desarrollo:

    Lanza el servidor de desarrollo:

    ```bash
    php artisan serve

La API estará disponible en http://localhost:8000.

## Contribución

Si deseas contribuir a este proyecto, sigue los siguientes pasos:

1. Realiza un fork del repositorio.
2. Crea una rama para tu función o corrección: `git checkout -b nueva-funcionalidad`
3. Realiza los cambios y realiza commits: `git commit -m "Añadir nueva funcionalidad"`
4. Envía tus cambios a tu repositorio fork: `git push origin nueva-funcionalidad`
5. Crea un Pull Request en el repositorio original.
