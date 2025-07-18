# BASE LARAVEL BLADE WITH TAILWIND CSS BY HATBI

## Description
Base Laravel Blade is a starter template for Laravel applications that uses Tailwind CSS and Flowbite for styling. It provides a clean and modern design with a focus on usability and performance. The template includes a responsive layout, pre-built components, and a simple setup process to help you get started quickly.

## Using

- Laravel | v10.10

- PHP | v8.1

- Vite | v6.3.3

- Tailwind CSS | v4.1.4

- Flowbite | v3.1.2

- Blade Icons (Tabler Pack) | v3.34

## Requirements

- PHP >= 8.1
- Composer
- Node.js >= 20.0
- NPM or Yarn
- MySQL database

## Installation

* Install php packages using composer
```bash
composer install
```

* Install node packages using npm
```bash
yarn install

# or

npm install
```

* Create `.env` file from `.env.example` and set your environment variables
```bash
cp .env.example .env
```

* Generate application key
```bash
php artisan key:generate
```

* Link storage directory
```bash
php artisan storage:link
```

* Run migrations
```bash
php artisan migrate
```

* Seed the database with initial data
```bash
php artisan db:seed
```

* Compile assets
```bash
yarn dev

# or

npm run dev
```

* Start the development server
```bash
composer run dev

# or run with custom host and port

php artisan serve --host=localhost --port=8000
```
