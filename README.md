## Livewire Laravel Tailwind Css Alpine JS - Purchasing System Example (Sistema de Compras)

<p align="center">
    <img src="https://img.shields.io/badge/PHP-%5E8.0-blue" alt="PHP ^8.0">
    <img src="https://img.shields.io/badge/Tailwind-%5E2.2-orange" alt="Tailwind">
    <img src="https://img.shields.io/badge/Alpine%20JS-%5E3.2-yellow" alt="Alpine">
    <img src="https://img.shields.io/badge/Laravel-%5E9-brightgreen" alt="Laravel">
    </a>
</p>


- Conferir a versão do php, o teste esta na Versão "^7.4|^8.0".
- Fazer o clone do repositório.
- Rodar os comandos abaixo:
    ```bash
    cd Livewire-Laravel-Tailwind-Alpine-Purchasing-System-Example/
    composer install && npm i  
    ```
- Configure o .env
    ```bash
    cp .env.example .env
    ```

- Key generate
    ```bash
    php artisan key:generate
    ```

- Dataase Create (criar o banco de dados)
    ```bash
    livewire_laravel_tailwind_alpine_purchasing_system_example
    ```

- Rode as migrations.
    ```bash
    php artisan migrate
    php artisan db:seed
    ```
- Rode o NPM em watch
    ```bash
    npm run watch
    ```
    
Se deu tudo certo até aqui, agora é com você, vai encontrar mais detalhes no projeto, faz rodar e divirta-se 😁.

<p align="center">
    <img src="https://raw.githubusercontent.com/Tellys/Livewire-Laravel-Tailwind-Alpine-Purchasing-System-Example/main/print_screen_system/animation.gif" alt="animaton system">
    </a>
</p>


Opções para instalação
```bash
composer update --no-scripts
```
Crie o arquivo .env (pode copiar o exemplo e mudar as vars)

```bash
php artisan key:generate
php artisan migrate
php artisan serve
```
