1. docker compose up -d
2. docker exec -it phpfpm_local ash
3. composer install
4. cp www/.env.example www/.env
5. modify .env file to below text
```
DB_CONNECTION=mysql
DB_HOST=host.docker.internal
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=1234
```
6. php artisan migrate
