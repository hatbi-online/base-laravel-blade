# BASE LARAVEL BLADE VỚI TAILWIND CSS BỞI HATBI

## Mô tả
Base Laravel Blade là một template khởi đầu cho các ứng dụng Laravel, sử dụng Tailwind CSS và Flowbite để tạo kiểu. Nó mang đến một thiết kế sạch sẽ, hiện đại, tập trung vào tính sử dụng và hiệu năng. Template bao gồm bố cục responsive, các component dựng sẵn và quy trình thiết lập đơn giản giúp bạn bắt đầu nhanh chóng.

## Công nghệ và thư viện sử dụng

- Laravel | v10.10

- Vite | v6.3.3

- Tailwind CSS | v4.1.4

- Flowbite | v3.1.2

- Blade Icons (Tabler Pack) | v3.34

## Yêu cầu hệ thống

- PHP >= 8.1
- Composer
- Node.js >= 20.0
- NPM or Yarn
- MySQL database

## Hướng dẫn cài đặt

* Cài đặt các gói và thư viện php bằng composer
```bash
composer install
```

* Cài đặt các gói và thư viện node
```bash
yarn install

# hoặc

npm install
```

* Tạo file `.env` từ `.env.example` và thiết lập các biến môi trường
```bash
cp .env.example .env
```

* Tạo key ứng dụng
```bash
php artisan key:generate
```

* Link thư mục storage
```bash
php artisan storage:link
```

* Chạy migrations
```bash
php artisan migrate
```

* Seed database với dữ liệu khởi tạo
```bash
php artisan db:seed
```

* Biên dịch các file assets
```bash
yarn dev

# hoặc

npm run dev
```

* Khởi chạy ứng dụng
```bash
composer run dev

# hoặc chạy với host và port tùy chỉnh

php artisan serve --host=localhost --port=8000
```
