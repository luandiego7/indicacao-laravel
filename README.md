# INDICAÇÃO - LARAVEL

![version](https://img.shields.io/badge/version-8.83.8-blue.svg)

Conheça o framework [Laravel](https://laravel.com).

## Start project

Recomendações para execução do projeto:

- Na pasta desejada execute no terminal de comando `git clone https://github.com/luandiego7/indicacao-laravel.git`.
- Dentro do projeto copie `.env.example` e cole na mesma pasta renomeando para `.env` e configure adequadamente.
- Para este projeto, informe somente o usuário e senha nos campos `DB_USERNAME` e `DB_PASSWORD` respectivamente.
- Dentro da pasta `indicacao-laravel` execute no terminal de comando `composer update`.
- E em seguida execute o comando `php artisan key:generate` para gerar uma key (chave) do projeto.
- Crie um banco schema `db_indication` no seu banco de dados Postgre. 
- E em seguida o comando `php artisan migrate:refresh --seed` para migração dos dados no banco.
- E em seguida rode um servidor da sua preferência. Xampp, Wamp.. Ou o próprio servidor que o laravel disponibiliza.
- Para utiliza o servidor do laravel, basta executar o comando: `php artisan serve` para inicializar o servidor.
- Caso utilize o servidor do Laravel, acesse o sistema pelo seu navegador de preferência através do endereço `http://localhost:8000`
- Caso utilize o xampp/wampp acesse `http://localhost/indicacao-laravel`
- E no projeto front-end do angular, dentro da pasta `indicacao-angular`, percorra  o caminho `/src/environments/environment.ts` e na linha `7`, altere `base_url` para o endereço do servidor acima, conforme escolha. Como padrão está setado `http://localhost:8000`.

Requisitos para execução do projeto:

- PHP
- Laravel
- PostgreSQL
- Composer

Em caso de problemas para a execução do projeto execute dentro da pasta no terminal de comando os seguintes comandos abaixo:

- `php artisan cache:clear`
- `php artisan view:clear`
- `php artisan route:clear`
- `php artisan clear-compiled`
- `composer dump-autoload`

## Documentação
A documentação do Laravel está disponível no [website](https://laravel.com/docs/).
