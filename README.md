# Installation

```
git clone https://github.com/matfish2/uniled-part2.git
cd uniled-part2
```

In your `.env` file set database and mail credentials (or set `MAIL_DRIVER=log`)

Install laravel and migrate the database:

```
composer install
php artisan migrate
```

Compile Sass files:

```
npm install
npm run dev
```
