# php-lumen-101

[![StyleCI](https://styleci.io/repos/104204338/shield?branch=master)](https://styleci.io/repos/104204338)

## installation

1. Install dependencies

```
php composer.phar install
```

2. Create a config file, just copy from `.env.example` then rename it to `.env`

3. Create a database named `blog`

4. Migrate and seed the database

```
php artisan migrate:refresh --seed
```

## Running on your local machine

```
php -S localhost:8000 -t public
```

## References

* [Lumen framework](https://lumen.laravel.com)
* [Eloquent ORM](https://laravel.com/docs/5.5/eloquent)
* [Database migrations](https://laravel.com/docs/5.5/migrations)
* [Database seedings](https://laravel.com/docs/5.5/seeding)
* [Blade template engine](https://laravel.com/docs/5.5/blade)

## Troubleshoots

* Call to undefined function bcrypt(): use `crypt()` instead.



