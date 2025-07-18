## Using

- Laravel | v10.10

- PHP | v8.1

- Vite | v6.3.3

## Requirements

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
php artisan serve
```
