# Após clonar esse repositório é necessário rodar os comandos via terminal, Caso contrário a aplicação não irá funcionar !!!


composer install

copy .env.example .env

php artisan key:generate

Feito isso entre no arquivo .env e preencha as informações de acesso ao banco de dados


Exemplo:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=teste

DB_USERNAME=root

DB_PASSWORD=


Por último digite o comando abaixo para criar o banco de dados.

php artisan migrate:fresh