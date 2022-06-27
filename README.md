# Test PHP under load

5 test scenarios to test php performance under load.

Just navigate to a folder and run `docker compose up`. The server is running on port 8080 on your local machine.

Install k6 an run `k6 run load.js` to measure under load.

## Contents

### 01-nginx-static

Just a Nginx server, no PHP involved

### 02-nginx-fpm-simple

Just a php page showing `phpinfo();` running on PHP-FPM with Nginx

### 03-nginx-fpm-laravel

A laravel setup with Nginx and PHP-FPM

### 04-swoole-simple

A minimalistic swoole application showing `phpinfo()`

### 05-swoole-laravel

Running laravel with swoole (using Octane)